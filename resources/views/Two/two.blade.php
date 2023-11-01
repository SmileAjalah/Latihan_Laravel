<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Two</title>

</head>
<body>

    <div class="container-fluid">
        <div class="list-group mt-3">
            <a href="#" class="list-group-item list-group-item-action active">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Title</h5>
                <small>3 days ago</small>
              </div>
              <p class="mb-1">Deskripsi</p>
              <div class="row mt-2">
                <div class="col-3">
                    <div class="row">
                        <div class="col-2">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#edit">Edit</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
              </div>
            </a>
          </div>
          <button class="btn btn-success mt-3 float-right" data-toggle="modal" data-target="#add">Add</button>
    </div>

    <div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Edit Content</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title1">New Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        aria-describedby="title">
                </div>
                <div class="form-group">
                    <label for="paragraf">New Deskripsi</label>
                    <textarea class="form-control" id="paragraf" name="paragraf" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="add" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Add Content</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title1">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        aria-describedby="title">
                </div>
                <div class="form-group">
                    <label for="paragraf">Deskripsi</label>
                    <textarea class="form-control" id="paragraf" name="paragraf" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
