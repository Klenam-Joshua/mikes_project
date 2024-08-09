<?php

//"a", "b","a","ad","adf");
?>
<div class="sidebar sidebar-dark border-end  fixed-left h-100"  style="height:100%; position:fixed">
  <div class="sidebar-header border-bottom">
    <div class="sidebar-brand w-100 text-center" >MIKE ACADEMY</div>
  </div>
  <ul class="sidebar-nav">
    <li class="nav-title">Board</li>
    <li class="nav-item">
      <a class="nav-link active" href="adminDashboard">
        <i class="nav-icon cil-speedometer"></i> 
        Admin Dashboard
      </a>
    </li>
    
    <li class="nav-item nav-group show">
      <a class="nav-link nav-group-toggle" href="#">
        <i class="nav-icon cil-puzzle"></i> Students
      </a>
      <ul class="nav-group-items">
        <li class="nav-item">
          <a class="nav-link" href="students">
            <span class="nav-icon"><span class="nav-icon-bullet"></span></span>  student list
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Nav dropdown item
          </a>
        </li>
      </ul>
    </li>
   
  
    </li>
  </ul>
  <div class="sidebar-footer border-top d-flex">
    <button class="sidebar-toggler" type="button"></button>
  </div>
</div>