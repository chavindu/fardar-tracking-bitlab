jQuery(document).ready(function($) {
    'use strict';

    // Handle tracking form submission
    $('#bitlab-tracking-form').on('submit', function(e) {
        e.preventDefault();
        
        const $form = $(this);
        const $submitBtn = $form.find('button[type="submit"]');
        const $buttonText = $submitBtn.find('.track-button-text');
        const $buttonLoading = $submitBtn.find('.track-button-loading');
        const $result = $('#tracking-result');
        
        // Get tracking number
        const trackingNumber = $('#tracking-number').val().trim();
        
        // Basic validation
        if (!trackingNumber) {
            showError(bitlab_ajax.strings.invalid_tracking);
            return;
        }
        
        // Validate format (alphanumeric, 3-20 characters)
        if (!/^[A-Za-z0-9]{3,20}$/.test(trackingNumber)) {
            showError(bitlab_ajax.strings.invalid_tracking);
            return;
        }
        
        // Show loading state
        $submitBtn.prop('disabled', true);
        $buttonText.addClass('d-none');
        $buttonLoading.removeClass('d-none');
        $result.html('');
        
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
                showError(bitlab_ajax.strings.tracking_error);
            },
            complete: function() {
                // Reset button state
                $submitBtn.prop('disabled', false);
                $buttonText.removeClass('d-none');
                $buttonLoading.addClass('d-none');
            }
        });
    });
    
    // Show error message
    function showError(message) {
        $('#tracking-result').html(
            '<div class="alert alert-danger" role="alert">' +
            '<i class="fas fa-exclamation-triangle"></i> ' +
            escapeHtml(message) +
            '</div>'
        );
    }
    
    // Show success message
    function showSuccess(content) {
        $('#tracking-result').html(content);
    }
    
    // Escape HTML to prevent XSS
    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }
    
    // Handle direct URL tracking
    const urlParams = new URLSearchParams(window.location.search);
    const trackingNo = urlParams.get('trackingno');
    
    if (trackingNo) {
        // Populate the form and submit
        $('#tracking-number').val(trackingNo);
        $('#bitlab-tracking-form').submit();
    }
}); 