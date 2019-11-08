<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row ">
            <div class="col-md-3 mb-3.5">
                <h3>About</h3>
                <p>Sahayata Nepal (Help-Nepal) is a Non Governmental Organization, registered under the district administration office, Dhading (registration # 961/067-068) and affiliated.</p>
                <p><?php echo $this->Html->link(__('Read More', true), array('controller' => 'pages', 'action' => 'about'));?></p>
            </div>
            <div class="col-md-3 mb-3.5">
                <h3>Contact &amp; Address</h3>
                <ul class="list-unstyled footer-link">
                    <li class="d-flex"><span class="mr-3">A:</span><span class="text-white">Kathmandu, Nepal</span></li>
                    <li class="d-flex"><span class="mr-3">T:</span><span class="text-white"> 01-0402030</span></li>
                    <li class="d-flex"><span class="mr-3">E:</span><span class="text-white"> nepal.sahayata@gmail.com</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mb-3.5">
                <h3>Quick Links</h3>
                <ul class="list-unstyled footer-link">
                    <li><?php echo $this->Html->link(__('About', true), array('controller' => 'pages', 'action' => 'about'));?></li>
                    <li><?php echo $this->Html->link(__('Our Programs', true), array('controller' => 'pages', 'action' => 'index'));?></li>
                    <li><?php echo $this->Html->link(__('Our Teams', true), array('controller' => 'index', 'action' => 'about'));?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Social</h3>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/Sahayata-Nepal-110497683729505/" class="p-2"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p style="text-align:center">Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
                    made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a></p>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
</footer>
<!-- END footer -->