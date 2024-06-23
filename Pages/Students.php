<div class="d-flex">
    <?php
    require "./classes/Student.php";
    require "./includes/Sidebar.php";
    ?>

    <main style="width: calc(100% - 16rem); margin-left: 16rem;">
        <?php
        require "./includes/Header.php";
        ?>

        <section class="px-3 mt-4">
            <div class="d-flex justify-content-end">

                <button type="button" class="btn btn-primary" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@mdo">
                         Add new Student    
                </button>

<!-- Button trigger modal -->


<div class="modal fade col-lg-10 modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New  Student</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
             <div  class="row">

                <div class="mb-3 col-lg-4">
            <label for="recipient-name" class="col-form-label text-sm">
                         First Name
            </label>
            <input type="text" class="form-control  form-control-sm" id="recipient-name">
          </div>
          <div class="mb-3  col-lg-4">
            <label for="lastName" class="col-form-label text-sm"> Last Name</label>
            <input class="form-control  form-control-sm" id="lastName"  />
          </div>
          <div class="mb-3  col-lg-4">
            <label for="contact" class="col-form-label text-sm">Contact</label>
            <input class="form-control    form-control-sm" id="contact"  />
          </div>



        </div>


                      <div  class="row">

                <div class="mb-3 col-lg-4">
            <label for="email" class="col-form-label text-sm">
                         Email
            </label>
            <input type="email" class="form-control  form-control-sm" id="email">
          </div>
          <div class="mb-3  col-lg-4">
            <label for="gender" class="col-form-label text-sm"> Email</label>
               <select  class="form-control "  >
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
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->

            </div>


        <div  class=" mt-4">

            <table class="table">
                <thead class="table-dark">
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
                          <td   class="text-center">
                             <span  class="text-danger" style= "cursor:pointer">
                                 <i class="bi bi-trash3"></i>
                    </span>

                    <span>
                        <i class="bi bi-pencil-square"></i>
                    </span>
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
