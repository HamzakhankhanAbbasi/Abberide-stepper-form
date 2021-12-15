<?php include 'inc/header.php'; ?>


<style>
    .share-link{
        padding: 70px 0;
    }
    .input-label{
        font-weight: 500;
        font-size: 18px;
        color: #201f1f;
        display: block;
        line-height: 1;
        margin-bottom: 10px;
    }
    .link-gen{
        height: 50px;
        width: 50%;
        margin: 0 auto;
        text-align: center;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: -moz-linear-gradient( 90deg, rgb(10,139,249) 0%, rgb(0,38,196) 100%);
        background-image: -webkit-linear-gradient(90deg, rgb(203 31 38) 0%, rgb(77 8 11) 100%);
        background-image: -ms-linear-gradient( 90deg, rgb(10,139,249) 0%, rgb(0,38,196) 100%);
        border-radius: 10px;
        border: none;
        outline: none;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 600;
    }
    a,
    a:hover{
        text-decoration: none !important;
        color: #fff !important;
    }
    textarea {
        resize: none;
    }
    #share-link button.close{
        position: absolute;
        right: -25px;
        top: -25px;
        background: #000;
        opacity: 1;
        color: #fff;
        border-radius: 50%;
        padding: 0;
        margin: 0;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
    }
    
</style>

<section class="share-link">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="link-form-wrap">
                    <!--<div>-->
                    <!--    <img class="img-fluid" src="assets/images/logo-img.png" alt="logo">-->
                    <!--</div>-->
                    <form>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1" class="input-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1" class="input-label">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="$">
                        </div>
                        <div class="text-center">
                            <a href="#" class="link-gen" data-toggle="modal" data-target="#share-link">Submit</a>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-md-4"></div>
            
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="share-link">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title text-center w-100">Copy The Link Below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-4">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'inc/footer.php'; ?>