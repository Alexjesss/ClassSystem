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
        <div class="table-responsive">
            <table>
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Student ID</th>
                    <th data-sortable="true" scope="col" data-field="Class">First name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Last name</th>
                    <th data-sortable="true" scope="col" data-field="Class">E-mail address</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class Name</th>
                </tr>
                </thead>
                    <tr>
                        <td><?php echo $student['studentID'];?></td>
                        <td><?php echo $student['firstName']; ?></td>
                        <td><?php echo $student['lastName']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td>
                            <div class="table-data">
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $student['studentID'];?>"/>
                                    <button type="submit" name="view" value="detail-view"><?php echo $student['className'];?></button>
                                </form>
                            </div>
                            </td>
                        <td><?php echo $teacher['name']; ?></td>
                    </tr>
            </table>
        </div>
    </div>
</section>


