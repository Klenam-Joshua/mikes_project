<div class="d-flex">
    <?php
    session_start();
    require "./classes/Student.php";
    require "./includes/Sidebar.php";
    


?>
   

    <main style="width: calc(100% - 16rem); margin-left: 16rem;">
        <?php
        require "./includes/Header.php";
        ?>

        <section class="px-3 mt-4">
            <?php
            
if (isset($_SESSION["student_created"])) {
    echo "<div class='alert alert-success  alert-dismissible fade show' role='alert'>
  Student added successfully!
   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
   
  </button>
</div>";
    // Unset the session variable
    unset($_SESSION['student_created']);
    // Exit the script

}
            ?>
            <div class="d-flex justify-content-end">

                <button type="button" class="btn btn-primary" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@mdo">
                         Add New Student    
                </button>

<!-- Button trigger modal -->


<div class="modal fade col-lg-10 modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
              <form action="./classes/createStudent.php" method="POST"   >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New  Student</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

             <div  class="row">

                <div class="mb-3 col-lg-4">
            <label for="recipient-name" class="col-form-label text-sm">
                         First Name
            </label>
            <input type="text" name="firstName" class="form-control  form-control-sm" id="recipient-name">
          </div>
          <div class="mb-3  col-lg-4">
            <label for="lastName" class="col-form-label text-sm"> Last Name</label>
            <input class="form-control   form-control-sm"  name="lastName" id="lastName"  />
          </div>
          <div class="mb-3  col-lg-4">
            <label for="contact" class="col-form-label text-sm">Contact</label>
            <input  name="phone" class="form-control    form-control-sm" id="contact"  />
          </div>



        </div>


                      <div  class="row">

                <div class="mb-3 col-lg-4">
            <label for="email" class="col-form-label text-sm">
                         Email
            </label>
            <input name="email" type="email" class="form-control  form-control-sm" id="email">
          </div>
          <div class="mb-3  col-lg-4">
            <label for="gender" class="col-form-label text-sm"> Gender</label>
               <select   name="gender"  class="form-control "  >
                    <option   value="male">
                          Male
</option>
             <option   value="female">
                          Female
</option>
               </select>
          </div>
          <div class="mb-3  col-lg-4">
            <label for="contact" class="col-form-label text-sm" >Contact</label>
            <input class="form-control    form-control-sm" id="contact"  />
          </div>



        </div>
       
      </div>
      <div   class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
        <button name="new_student"  class="btn btn-primary">Add</button>
      </div>
       </form>
    </div>
  </div>
</div>

<!-- Modal -->

            </div>


        <div  class=" mt-4">

            <table class="table">
                <thead class="table-dark" style="position:sticky; top:0;" >
                     <tr>
                            <th>
                                 First Name
</th>
<th>
                                 Last Name
</th>
<th>
                            Gender

</th>

<th>
                              Email
</th>

<th>
                                Phone Number
</th>

<th>
                               Actions
</th>
                     </tr>

                </thead>
                <tbody>
                    <?php
                    // Fetch students data
                    $students = $student->getStudents();
                    while ($row = $students->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr class='students'>

                            <td><?= $row['first_name'] ?></td>
                            <td><?= $row['last_name'] ?></td>
                            <td><?= $row['gender'] ?></td>
                              <td><?= $row['email'] ?></td>
                            <td><?= $row['phone_number'] ?></td>
                          <td   class="text-center ">
                   <div class="d-flex align-items-center gap-2"  >
                                                <form  action="" method="POST"> <span  class="text-danger border-0" style= "cursor:pointer">
                             <input name="delete" value="<?= $row['first_name'] ?>" type="hidden" />
                                 <spanb type="submit" class="bi bi-trash3 bg-transparent border-0"></button>
                                
                    </span>
                    </form>

                    <span>
                                                       <span type="submit" class=" border-0  bi bi-pencil-square  bg-transparent"><span/>
                        
                    </span>
                   </div>
                    </td>   
                            <!-- <td><span class="dot-icon fas fa-ellipsis-h" id='Deletebtn' data-studentId='<?= $row["student_id"] ?>'></span></td> -->
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
</div>
        </section>
    </main>
</div>
