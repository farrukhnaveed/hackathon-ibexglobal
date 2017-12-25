
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url('<?php echo Yii::app()->request->baseUrl ?>/static/images/img_bg_3.jpg');">
                <div class="overlay-gradient"></div>
                <div class="container-fluids">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                            <div class="slider-text-inner text-center">
                                <h1>Upload CSV</h1>
                                <h2>Upload csv and get Employee Aggregate work hours</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>		   	
        </ul>
    </div>
</aside>		
<div id="fh5co-contact">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>CSV file rules</h2>
            <p>Consolidate all the three csv based on EmployeeId and aggregate the “hours worked” field for common EmployeeId (across files or within each file).  Where the EmployeeId only shows up once then you need to mention the above three fields for the EmployeeId as well. Each EmployeeId will only have one row in the final csv file that your program will produce.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-push-1 animate-box">
            <h3>Creater</h3>
            <ul class="contact-info">
                <li><i class="icon-user"></i><a href="mailto:farrukh.naveed@ibexglobal.com">Farrukh Naveed</a></li>
                <li><i class="icon-user"></i><a href="mailto:zeeshan.shakil@ibexglobal.com">Zeeshan Shakil</a></li>
            </ul>
        </div>
        <div class="col-md-7 col-md-push-1 animate-box">
            <!--            <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
                            <strong> OOPS!!</strong> <br>
                            
                        </div>-->
            <?php if(count($errors) > 0){ ?>
                <ul>
                <?php foreach ($errors as $error) { ?>
                    <li  class="text-danger"><?= $error; ?></li>
                <?php }  ?>
                </ul>
                <?php }  ?>
            <div class="row">
                <?php
                if ($isResult == false) {
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="file-input">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <p>CSV File 1</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input required="true" name="csv1" type="file" class="form-control" accept=".csv">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <p>CSV File 2</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input required="true" name="csv2" type="file" class="form-control" accept=".csv">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <p>CSV File 3</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input required="true" name="csv3" type="file" class="form-control" accept=".csv">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Get Result" class="btn btn-primary btn-modify">
                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                <a class="btn-sm btn-primary col-md-offset-9" target="_blank" href="Site/Download">
                                        Download File
                </a><br><br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Employee ID</td>
                                <td>Name</td>
                                <td>Hours Worked</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key=>$val) { ?>
                                <tr>
                                    <td><?= $key ?></td>
                                    <td><?= $val['Name'] ?></td>
                                    <td><?= $val['HoursWorked'] ?></td>
                                </tr>
                            <?php }  ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    </td>
                            </tr>
                        </tfoot>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>