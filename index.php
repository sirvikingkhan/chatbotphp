<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        /* Add custom styles for full-screen modals */
        .modal-dialog-fullscreen {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            max-width: 100%;
            max-height: 100%;
        }
        .modal-content-fullscreen {
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Include your header and navigation here -->
        
        <!-- Page Content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container">
                    <?php 
                        if (!file_exists($page.".php") && !is_dir($page)) {
                            include '404.html';
                        } else {
                            if (is_dir($page))
                                include $page.'/index.php';
                            else
                                include $page.'.php';
                        }
                    ?>
                </div>
            </section>
        </div>
        <!-- End Page Content -->

        <!-- Fullscreen Modals -->
        <div class="modal fade" id="confirm_modal" role='dialog'>
            <div class="modal-dialog modal-dialog-fullscreen modal-dialog-centered" role="document">
                <div class="modal-content modal-content-fullscreen">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmation</h5>
                    </div>
                    <div class="modal-body">
                        <div id="delete_content"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="uni_modal" role='dialog'>
            <div class="modal-dialog modal-dialog-fullscreen modal-dialog-centered" role="document">
                <div class="modal-content modal-content-fullscreen">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="uni_modal_right" role='dialog'>
            <div class="modal-dialog modal-dialog-fullscreen" role="document">
                <div class="modal-content modal-content-fullscreen">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fa fa-arrow-right"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="viewer_modal" role='dialog'>
            <div class="modal-dialog modal-dialog-fullscreen" role="document">
                <div class="modal-content modal-content-fullscreen">
                    <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
                    <img src="" alt="" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>

        <!-- Include your footer here -->
    </div>
    <!-- Include your JavaScript files here -->
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>
