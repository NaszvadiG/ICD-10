<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>ICD-10 | Home</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div id="header">
        <div class="container main-color-bg">
          <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-10">
              <span id="title">ICD-10</span>
              <span id="desc">International Statistical Classification of Diseases and Related Health Problems</span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
              <div class="dropdown">
                <span id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">About ICD-10</a></li>
                  <li><a href="#">Developer</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End of HEADER -->

    <!-- CONTENT -->
    <section id="content">
      <div class="container">
        <div class="row">
          <!-- SIDEBAR -->
          <aside id="sidebar" class="col-md-3 col-sm-3 col-xs-3">
            <ul class="list-group">
              <li id="codes" class="list-group-item btn btn-default">CODES</li>
              <li id="chapters" class="list-group-item btn btn-default">CHAPTERS</li>
              <li id="blocks" class="list-group-item btn btn-default">BLOCKS</li>
              <li id="categories" class="list-group-item btn btn-default">CATEGORIES</li>
            </ul>
          </aside>
          <!-- End of SIDEBAR -->

          <!-- MAIN CONTENT -->
          <main id="main-content" class="col-md-9 col-sm-9 col-xs-9">
            <div class="well">
              <form action="#" method="post">
                <input type="text" name="" class="form-control" placeholder="Search . . .">
              </form>
              <table class="table">
                <thead>
                  <th>ID</th>
                  <th>Descriptions</th>
                </thead>
                <tbody>
                  <tr>
                    <td>A00</td>
                    <td>Cholera</td>
                  </tr>
                  <tr>
                    <td>A00.0</td>
                    <td>Cholera due to Vibrio cholerae 01, biovar cholerae</td>
                  </tr>
                  <tr>
                    <td>A00.1</td>
                    <td>Cholera due to Vibrio cholerae 01, biovar eltor</td>
                  </tr>
                  <tr>
                    <td>A00.9</td>
                    <td>Cholera, unspecified</td>
                  </tr>
                  <tr>
                    <td>A01</td>
                    <td>Typhoid and paratyphoid fevers</td>
                  </tr>
                </tbody>
              </table>
              <nav id="pagination" aria-label="Page Navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </main>
          <!-- End of MAIN CONTENT -->
        </div>
      </div>
    </section>
    <!-- End of CONTENT -->

    <!-- FOOTER -->
    <footer id="footer">
      <div class="container main-color-bg">
        <p>Copyright &copy; 2017 | Arianggi</p>
      </div>
    </footer>



    <!-- jQuery and Bootstrap
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/js/jquery-3.1.1.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>" type="text/javascript"></script>
  </body>
</html>
