<!-- footer -->
<footer>
    <hr>
    <div class="container-fluid" id="ft">
        <div class="row">
            @foreach ($footer as $ft)
                <div class="col-lg-5">
                    <h3><strong>About Us</strong></h3>
                <p>{{$ft->about_us}}</p>
                </div>
                <div class="col-lg-4">
                    <h3><strong>Contact</strong></h3>
                <p>{{$ft->contact}}</p>
                </div>
                <div class="col-lg-3">
                    <h3><strong>Support</strong></h3>
                <p>{{$ft->support}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid" id="copyright">
        <div class="copright">
            <h3>Copyright &copy; HelmCustom 2020</h3>
        </div>
    </div>
    <hr>
</footer>
<!-- tutup footer -->
