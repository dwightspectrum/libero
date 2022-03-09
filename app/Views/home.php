<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Libero</title>
    <link href="assets/img/libero.png" rel="icon">
    <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

<!-- Scripts here -->
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <header>
      <div
        class="d-flex justify-content-between container-fluid p-4"
        style="background-color: #0a233d"
      >
        <div class="mt-2">
          <img src="assets/img/libero.png" alt="" />
        </div>
        <div>
          <nav style="font-size: x-large; font-weight: 1000;">
            <ul class="nav justify-content-center ">
              <li class="nav-item">
                <a class="nav-text" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="#">NEWS</a>
              </li> 
              <li class="nav-item">
                <a class="nav-text" href="#">EVENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="#">WORLD</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="login" style = "cursor: pointer;">
          <img src="assets/img/seach.png" alt="" height="50px">        
        </div>
      </div>
    </header>
    <form id="submit-form" method="POST">
      <div class="container mt-5">
        <div class="row justify-content-around">
          <div class="col-9 px-5" style="border-right: groove;">
            <p style="font-weight: bolder; font-size: xxx-large;">How do you feel about recycling?</p>
            <div class="mx-5 pe-5">
              <div class="container">
                <div class="fs-2">Postcode:</div>
                <input type="text" class="modify-inputField form-control" id="postcode" name="postcode" style="width: 25%;" required />
                <div class="mt-4">
                  <p class="fs-3">
                    Should the government start enforcing garbage <br>separation and
                    recycling schemes across your area?
                  </p>
                </div>
                <div class="form-check form-check-inline input-container ">
                  <input class="form-check-input form" type="radio" name="survey_choice" id="inlineRadio1 survey_choice" value="yes" style="cursor: pointer;" required>
                  <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline input-container">
                  <input class="form-check-input form" type="radio" name="survey_choice" id="inlineRadio2 survey_choice" value="no" style="cursor: pointer;" required>
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <div class="mt-3">
                  <p class="fs-3">E-mail Address:</p>
                  <input type="email" class="modify-inputField form-control" name="email" id="email" style="width: 40%;" required />
                  <p class="fs-3 mt-3">Mobile Number:</p>
                  <input type="text" class="modify-inputField form-control" name="mobile_number" id="mobile_number" style="width: 40%;" required />
                </div>
                <div class="float-end mt-5">
                  <button type="submit" class="btn btn-rounded btn-lg submit">
                    <p class="fs-2">Submit</p>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3 px-4">
            <p class="fs-2" style="font-weight: bolder;">Phasellus augue <br>sapien</p>
            <div class="line"></div>
            <div class="card" id="image-background">
              <div class="card-body">
                <h5 class="card-text text-center" style="padding-top: 40px;">Vestibulum sit amet tempor orci</h5>
                <div>
                  <!-- <img src="" alt="" class="card-img"> -->
                  <a class="read-more" href="#">Read more >></a>
                </div>
              </div>
            </div>
            <p class="fs-4">Phasellus augue sapien, aliquam sit amet mauris</p>
            <div class="line"></div>
            <div class="card" id="second-image">
              <div class="card-body">
                <h5 class="card-text text-center" style="padding-top: 40px;">Integer consectetur <br>orci ligula</h5>
                <div>
                  <a class="read-more" href="#">Read more >></a>
                </div>
              </div>
            </div>
            <p class="fs-4">Sed facilisis volutpat <br>turpis eu viverra</p>
          </div>
        </div>
      </div>
    </form>

    <div class="container-fluid py-5 mt-5" style="border-top: groove;">
      <div class="container">
        <footer class="row row-cols-5 ">
          <div class="col">
            <h5 >Rutrum</h5>
            <div class="bottom-line"></div>
            <ul class="nav flex-column fs-5">
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Fermentum</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Neque</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Consequat</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h5>Malesuada</h5>
            <div class="bottom-line"></div>
            <ul class="nav flex-column fs-5">
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Tellus</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Condimentum</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Consectetur</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h5>Pellentesque</h5>
            <div class="bottom-line"></div>
            <ul class="nav flex-column fs-5">
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Habitant</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Morbi</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Tristique</a></li>
            </ul>
          </div>

          <div class="col">
            <h5>Quisque</h5>
            <div class="bottom-line"></div>
            <ul class="nav flex-column fs-5">
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Pharetra</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Volutpat</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-black">Tristique</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="flex-column round">
              <li class="nav-item mb-3"><h5 class="ms-4">Phasellus</h5></li>
              <li class="nav-item mb-3"><h5 class="ms-4">Augue</h5></li>
              <li class="nav-item mb-3"><h5 class="ms-4">Sapien</h5></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
    <div class="btn-group-fab" role="group" aria-label="FAB Menu">
      <div>
        <a href="/login">
          <button type="button" class="btn btn-main btn-primary has-tooltip" data-placement="left" title="Login"><i class="bi bi-box-arrow-in-right" style="font-size: 25px;"></i></button>
        </a>
      </div>
    </div>
  </body>
</html>
<script type="module" src="assets/js/submit.js?v=1.0"></script>
<style>
p {
  font-family: 'Brandon Grotesque Light', sans-serif;
}
ul li {
  font-family: 'Brandon Grotesque Light', sans-serif;
}
h5 {
  font-family: 'Brandon Grotesque Light', sans-serif;
}
label {
  font-family: 'Brandon Grotesque Light', sans-serif;
}
  .nav-text {
    display: block;
    padding: 0.5rem 1rem;
    color: white;
    text-decoration: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out;
    font-family: 'Brandon Grotesque Light', sans-serif;
  }
  .modify-inputField {
    border-radius: 25px;
    height: 45px;
    border: 3px solid #4077f2;
    color: #4077f2;
  }
  /* #modify-inputField:focus {
    border-color: 3px solid #4077f2;
  } */
  .line {
    border-top: solid #4077f2 15px;
    width: 15rem;
    margin-bottom: 10px;
  }
  .bottom-line {
    border-top: solid #4077f2 2px;
    width: 5rem;
    margin-bottom: 10px;
  }
  h5 {
    font-family: 'Brandon Grotesque Meduim', sans-serif;
  }
  .submit {
    background-color: #0a233d;
    border-radius: 2em;
    color: white;
    width: 12rem;
    height: 50px;
    padding-top: 1px;
    font-family: 'Brandon Grotesque Light', sans-serif; 
  }
  .submit:hover {
    color: white;
    background-color: #4077f2;
  }
  #image-background {
    width: 15rem; 
    background: linear-gradient(rgb(129,130,126), rgba(0, 0, 0, 0.5)), url('assets/img/1b.jpeg');
    color: white;
  }
  #second-image {
    width: 15rem; 
    background: linear-gradient(rgb(129,130,126), rgba(0, 0, 0, 0.5)), url('assets/img/1c.jpeg');
    color: white;
  }
  .read-more {
    background-color: #4077f2;
    color: white;
    text-decoration: none;
    opacity: 85%
  }
  .input-container {
    height: 45px;
    background-color: #4077f2;
    font-size: 25px;
    width: 7rem;
    border-radius: 25px;
    padding-left: 55px;
    padding-top: 5px;
    color: white;
 
  }
  
  ul.round {
	font-size: 13px;
	line-height: 1.5em;
	margin: 5px 0 15px;
	padding: 0;

  }
	ul.round li {
		list-style: none;
		position: relative;
		padding: 0 0 0 20px;
	}
  ul.round li::before {
	 content: "";
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 30px;
	 height: 30px;
	 background-color: #4077f2;
	 border-radius: 50%;
	 -moz-border-radius: 50%;
	 -webkit-border-radius: 50%;
}

.btn-group-fab {
  position: fixed;
  width: 50px;
  height: auto;
  right: 20px; bottom: 20px;
}
.btn-group-fab div {
  position: relative; width: 100%;
  height: auto;
}
.btn-group-fab .btn {
  position: absolute;
  bottom: 0;
  border-radius: 50%;
  display: block;
  margin-bottom: 4px;
  width: 40px; height: 40px;
  margin: 4px auto;
}
.btn-group-fab .btn-main {
  width: 60px; height: 60px;
  right: 50%; margin-right: -25px;
  z-index: 9;
}




</style>
