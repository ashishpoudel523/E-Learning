   
    <!-- start including header -->
    <?php
    include('./mainInclude/header.php');
?>
<!-- end including header -->

<!-- start course page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses"
        style="height:500px; width:100%; 
        object-fit:cover;box-shadow:10px;">
    </div>
</div>
<!-- start course page banner -->

<!-- start main content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="./image/python.jpg"  class="card-img-top" alt="">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn Guitar</h5>
                <p class="card-text">Description: Lorem ipsum 
                    dolor sit amet consectetur, adipisicing
                     elit. At consectetur recusandae incidunt
                      perferendis quibusdam hic ad? Error aut
                       obcaecati veritatis fugiat, incidunt 
                    ea voluptatibus tenetur porro, placeat
                     totam nihil cupiditate.</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="post">
                    <p class="card-text d-inline"> Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                    <button type="submit" class="btn   btn-primary text-white font-weight-bloder float-right" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th  scope="row">1</th>
                        <td>Introduction</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- end main content -->


    <!-- start including footer -->
<?php
    include('./mainInclude/footer.php');
?>
<!-- end including footer -->
</body>
</html>