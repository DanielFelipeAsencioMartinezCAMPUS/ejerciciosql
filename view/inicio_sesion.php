<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row-12 d-flex justify-content-center ">
            <div class="col-10  py-5 " id="video">
                <div class="container px-4 ">
                  <div class="row gx-5 text-center ">
                    <div class="col">
                     <div class="p-3   "><!--modal /--> <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100 fs-3" data-bs-toggle="modal" data-bs-target="#modal">
                              inicia sesion
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                      </div>
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--modal /-->
                            </div>
                            </div>
                    <div class="col">
                      <div class="p-3  "><!--modal /--> <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger fs-3 w-100 " data-bs-toggle="modal" data-bs-target="#modal_dos">
                          registrate
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal_dos" tabindex="-1" aria-labelledby="modal_dosLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content bg-dark">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modal_dosLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--modal /-->
                        </div>
                    </div>
                  </div>
                </div> 
                <div class="row-12 d-flex justify-content-center m-5 p-5">
                    <div class="col-6  py-5 text-center text-primary">
                            <svg viewBox="0 0 1320 300">

                        <!-- Symbol -->
                        <symbol id="s-text">
                        <text text-anchor="middle"
                                x="50%" y="50%" dy=".95em">
                            BIENVENIDO
                        </text>
                        </symbol>  

                        <!-- Duplicate symbols -->
                        <use xlink:href="#s-text" class="text"
                            ></use>
                        <use xlink:href="#s-text" class="text"
                            ></use>
                        <use xlink:href="#s-text" class="text"
                            ></use>
                        <use xlink:href="#s-text" class="text"
                            ></use>
                        <use xlink:href="#s-text" class="text"
                            ></use>

                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>