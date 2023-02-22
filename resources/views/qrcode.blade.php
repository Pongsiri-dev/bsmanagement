<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/js/html5-qrcode-scanner.js"></script>
    <script src="/js/html5-qrcode.js"></script>
    <script src="/js/html5-qrcode.min.js"></script>
    <style>
        #qr-reader {
            width: calc(60%);
        }

        @media (max-width: 720px) {
            #qr-reader {
                width: calc(100%);
                /* height:calc(85%); */
            }

            #qr-reader__scan_region video {
                /* height: 60% !important; */
                object-fit: cover !important;
            }
        }

        .atooltip,
        .atooltip:focus {
            background: unset;
            border: unset;
            padding: unset;
        }
    </style>
</head>

<body>
    <div class="card card-outline card-primary">
        <div class="w-100 d-flex justify-content-center mt-3">
            <a class="btn btn-primary btn-rounded" id="startLive" href="#">Scan QR</a>
        </div>
        <div class="col-md-12 pt-3" id="qr_holder" align="center">
            <div class="w-100 d-flex justify-content-end"><a class="btn btn-primary btn-rounded" id="startLive"
                    href="#">Back</a></div>
            <div id="qr-reader" style=""></div>
            <div id="qr-reader-results"></div>
        </div>
        <input type="hidden" id="audience_id" value="">
        <div class="col-md-12 p-2">
            <div class="callout">
                <div class="row">
                    <div class="col-md-6">
                        <dl>
                            <dt>Event Title</dt>

                        </dl>
                        <dl>
                            <dt>Event Venue</dt>

                        </dl>
                        <dl>
                            <dt>Event Description</dt>

                        </dl>
                    </div>
                    <div class="col-md-6">
                        <dl>
                            <dt>Event Start</dt>

                        </dl>
                        <dl>
                            <dt>Event End</dt>

                        </dl>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <h3>Present Attendees</h3>
                <div class="input-group input-group-sm mb-3 col-md-4">
                    <div class="input-group-append">

                    </div>
                </div>
            </div>
            <hr>
            <div class="clear-fix"></div>
            <div class="row row-cols-lg-4 row-col-xs-1" id="present">

            </div>
            <h5 class='text-center' id="loadData" style="">Loading Data. Please Wait...</h5>
            <h5 class='text-center' id="noData" style="display:none">No Attendees registered yet.</h5>
        </div>
    </div>
    <div class="d-none" id="clone-item">
        <div class="col a-item">
            <div class="callout border-0">
                <button type="button" class="float-right atooltip" data-toggle="tooltip" data-html="true"
                    title="">
                    <i class="fa fa-info-circle text-info"></i>
                </button>
                <dl>
                    <dt class="aname">John Smith</dt>
                    <dd class="aremarks">Remarks</dd>
                </dl>
                <div class="w-100 d-flex justify-content-end">
                    <small class="text-muted adate">Jun 23, 2021 6:23 PM</small>
                </div>
            </div>
        </div>
    </div>
    <script>
        function _qsave() {
            start_loader()
            var audience_id = $('#audience_id').val()
            $.ajax({
                url: _base_url_ + 'classes/Master.php?f=register',
                method: 'POST',
                data: {
                    audience_id: audience_id,
                    event_id: 1
                },
                error: err => {
                    console.log(err)
                    alert_toast('An Error Occured.');
                    end_loader()
                },
                success: function(resp) {
                    resp = JSON.parse(resp)
                    if (resp.status == 1) {
                        swal({
                            title: resp.name,
                            text: 'Successfully Registered',
                            icon: 'success',
                            timer: 2000,
                            buttons: false,
                        })

                    } else if (resp.status == 2) {
                        swal({
                            title: 'Code is not Valid',
                            text: 'Code is not enrolled in this event',
                            icon: 'error',
                            timer: 200,
                            buttons: false,
                        })
                    } else if (resp.status == 3) {
                        swal({
                            title: 'Already Recorded',
                            text: resp.name + ' is already recorded',
                            icon: 'error',
                            timer: 200,
                            buttons: false,
                        })
                    } else {
                        alert_toast('An Error Occured.');

                    }
                    setTimout(function() {
                        $('#audience_id').val('')
                        end_loader()
                    }, 2100)


                }
            })
        }

        function docReady(fn) {
            // see if DOM is already available
            if (document.readyState === "complete" ||
                document.readyState === "interactive") {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function() {
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;

            function onScanSuccess(qrCodeMessage) {
                if (qrCodeMessage !== $('#audience_id').val()) {
                    ++countResults;
                    lastResult = qrCodeMessage;
                    $('#audience_id').val(qrCodeMessage)
                    _qsave()

                }
            }

            // var html5QrcodeScanner = new Html5QrcodeScanner(
            //     "qr-reader", { fps: 5, qrbox: 200 });

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 5,
                    qrbox: 550
                });


            html5QrcodeScanner.render(onScanSuccess);
        });
        $(document).ready(function() {
            console.log($(window).height() - $('.top-head').height())
            $('.main-container').height($(window).height() - $('.top-head').height())
        })
    </script>
</body>

</html>
