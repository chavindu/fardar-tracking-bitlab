jQuery(document).ready(function($) {
    'use strict';

    // Handle tracking form submission
    $('#bitlab-tracking-form').on('submit', function(e) {
        e.preventDefault();
        
        const $form = $(this);
        const $button = $('#bitlab-track-button');
        const $buttonText = $button.find('.button-text');
        const $spinner = $button.find('.spinner-border');
        const $result = $('#bitlab-tracking-result');
        const trackingNumber = $('#bitlab-tracking-number').val().trim();
        
        // Validate tracking number
        if (!trackingNumber) {
            showError('Please enter a tracking number.');
            return;
        }
        
        // Validate format (alphanumeric only)
        if (!/^[A-Za-z0-9]+$/.test(trackingNumber)) {
            showError('Please enter a valid tracking number (letters and numbers only).');
            return;
        }
        
        // Show loading state
        $button.prop('disabled', true);
        $buttonText.addClass('d-none');
        $spinner.removeClass('d-none');
        $result.hide();
        
        // Make AJAX request
        $.ajax({
            url: bitlab_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'bitlab_track_shipment',
                tracking_number: trackingNumber,
                nonce: bitlab_ajax.nonce
            },
            timeout: 30000, // 30 seconds timeout
            success: function(response) {
                if (response.success) {
                    showSuccess(response.data);
                } else {
                    showError(response.data || bitlab_ajax.strings.tracking_error);
                }
            },
            error: function(xhr, status, error) {
                console.error('Tracking request failed:', error);
                if (status === 'timeout') {
                    showError('Request timed out. Please try again.');
                } else {
                    showError(bitlab_ajax.strings.tracking_error);
                }
            },
            complete: function() {
                // Reset button state
                $button.prop('disabled', false);
                $buttonText.removeClass('d-none');
                $spinner.addClass('d-none');
            }
        });
    });
    
    // Handle direct URL tracking
    const urlParams = new URLSearchParams(window.location.search);
    const trackingNo = urlParams.get('trackingno');
    
    if (trackingNo) {
        // Pre-fill the tracking number
        $('#bitlab-tracking-number').val(trackingNo);
        
        // Automatically submit the form
        setTimeout(function() {
            $('#bitlab-tracking-form').submit();
        }, 500);
    }
    
    // Show error message
    function showError(message) {
        const $result = $('#bitlab-tracking-result');
        $result.html(`
            <div class="alert alert-danger" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                ${escapeHtml(message)}
            </div>
        `).show();
        
        // Scroll to result
        $result[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    // Show success message
    function showSuccess(content) {
        const $result = $('#bitlab-tracking-result');
        $result.html(`
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-truck me-2"></i>
                        Tracking Information
                    </h5>
                </div>
                <div class="card-body">
                    ${content}
                </div>
            </div>
        `).show();
        
        // Scroll to result
        $result[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    // Escape HTML to prevent XSS
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
    
    // Add input validation
    $('#bitlab-tracking-number').on('input', function() {
        const value = $(this).val();
        const isValid = /^[A-Za-z0-9]*$/.test(value);
        
        if (value && !isValid) {
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });
    
    // Clear validation on focus
    $('#bitlab-tracking-number').on('focus', function() {
        $(this).removeClass('is-invalid');
    });
}); 