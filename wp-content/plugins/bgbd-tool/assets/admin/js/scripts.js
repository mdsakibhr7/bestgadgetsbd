/**
 * Front Script
 */

(function ($, window, document, pluginObject) {
    "use strict";

    let audioElement,
        getUrlParameter = function getUrlParameter(sParam) {
            let sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };


    $(window).on('load hashchange', function () {

        let listenerBody = $('body'),
            listenerWrap = $('.bestgadgetsbd'),
            urlHash = window.location.hash.substr(1),
            urlHashResult = urlHash.split('&').reduce(function (res, item) {
                let parts = item.split('=');
                res[parts[0]] = parts[1];
                return res;
            }, {});

        if (listenerWrap.hasClass('bestgadgetsbd-active')) {
            return;
        }

        if ('bestgadgetsbd' === getUrlParameter('page') && ('notifier' === urlHashResult.tab || typeof urlHashResult.tab === 'undefined')) {
            listenerBody.addClass('bestgadgetsbd-bubble-active');
        } else {
            listenerBody.removeClass('bestgadgetsbd-bubble-active');
        }
    });

    $(document).on('ready', function () {

        let listenerWrap = $('.bestgadgetsbd'),
            audioSrc = listenerWrap.data('audio'),
            bestgadgetsbdController = $('.bestgadgetsbd-action.bestgadgetsbd-controller'),
            ordersList = $('.bestgadgetsbd-orders'),
            bestgadgetsbdPopup = $('.bestgadgetsbd-popup');

        audioElement = document.createElement('audio');

        if (typeof audioSrc !== 'undefined') {
            audioElement.setAttribute('src', audioSrc);
            audioElement.setAttribute('muted', 'muted');
            audioElement.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");

            setInterval(function () {
                if (bestgadgetsbdController.hasClass('active')) {
                    $.ajax({
                        type: 'POST',
                        context: this,
                        url: pluginObject.ajaxUrl,
                        data: {
                            'action': 'bestgadgetsbd',
                        },
                        success: function (response) {
                            if (response.success && response.data.count > 0) {

                                let popupContent = response.data.htmlPopup;

                                ordersList.append(response.data.html);
                                // audioElement.load();
                                audioElement.play();

                                if (popupContent.length > 0) {
                                    bestgadgetsbdPopup.find('.popup-content').html(popupContent);
                                    bestgadgetsbdPopup.show();
                                }
                            }
                        },
                    });
                }

                if (ordersList.find('.bestgadgetsbd-row').length === 1) {
                    audioElement.pause();
                }
            }, pluginObject.interval);
        }

        audioElement.addEventListener('ended', function () {
            audioElement.currentTime = 0;
            audioElement.play();
        });
    });

    $(document).on('click', '.order-action.mark-read', function () {
        $(this).parent().parent().fadeOut().remove();
    });

    $(document).on('click', '.bestgadgetsbd-volume', function () {
        audioElement.muted = $(this).hasClass('active');
    });

    $(document).on('click', '.bestgadgetsbd-action', function () {

        let listenerBody = $('body'),
            controller = $(this),
            oListenerChecker = $('.bestgadgetsbd'),
            controllerClasses = controller.data('classes'),
            controllerIcon = controller.find('span.dashicons'),
            needToggle = true;

        if (typeof controllerClasses === 'undefined' || controllerClasses.length === 0) {
            needToggle = false;
        }

        if (needToggle) {
            controller.toggleClass('active');
            controllerIcon.toggleClass(controllerClasses);

            if (controllerIcon.hasClass('dashicons-controls-pause')) {
                listenerBody.removeClass('bestgadgetsbd-bubble-active');
                oListenerChecker.addClass('bestgadgetsbd-active');
            } else if (controllerIcon.hasClass('dashicons-controls-play')) {
                listenerBody.addClass('bestgadgetsbd-bubble-active');
                oListenerChecker.removeClass('bestgadgetsbd-active');
                audioElement.pause();
            }
            return;
        }

        if (!needToggle && confirm(pluginObject.confirmText)) {
            location.href = '';
        }
    });


    // Popup Skip button clicked
    $(document).on('click', '.bestgadgetsbd-popup .bestgadgetsbd-popup-box .popup-actions .popup-action.popup-action-skip', function (e) {
        $(this).parent().parent().parent().fadeOut();
    });

    // Popup Acknowledge button clicked
    $(document).on('click', '.bestgadgetsbd-popup .bestgadgetsbd-popup-box .popup-actions .popup-action.popup-action-ack', function (e) {
        e.preventDefault();
        audioElement.pause();
        $(this).parent().parent().parent().fadeOut();

        // $('.order-action.mark-read').trigger('click');
    })

    // $(document).on('wpsettings-attachment-loaded', function () {
    //     $('.pb_settings_form #submit').trigger('click');
    // });

    // $(document).on('wpsettings-attachment-removed', function (e, elRemoveButton) {
    //
    //     let elAttachmentContainer = elRemoveButton.parent();
    //
    //     elAttachmentContainer.find('input[type=hidden]').val('');
    //     elAttachmentContainer.find('.dashicons').css('opacity', 0);
    //     elRemoveButton.hide();
    //
    //     $('.pb_settings_form #submit').trigger('click');
    // });
})(jQuery, window, document, bestgadgetsbd);