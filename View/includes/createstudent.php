
<section class="general-section justify-content-center">
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="search-wrap">
                <div class="container">
                    <h4>Look for a specific student via this search bar</h4>
                    <form action="" method="onsubmit" class="search-form">
                        <button type="submit" value="search" id="searchButton">search</button>
                        <input type="text" class="search">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center padding">
        <form method="post" action="#">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <select class="form-control form-control-sm">
                        <?php foreach($classes as $class):?>
                            <option value="<?php $class['classID'];?>">
                                <?php echo $class['classID'];?>
                            </option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="save" class="btn btn-primary">Create student</button>
                </div>
            </div>
        </form>
    </div>
</section>



