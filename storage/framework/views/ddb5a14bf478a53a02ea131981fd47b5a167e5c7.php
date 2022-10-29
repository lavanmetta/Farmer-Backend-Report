<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrotech UserData</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
      * {
        font-family: Arial, Helvetica, sans-serif, Roboto;
      }
      .main-container {
        background-color:#edf0f0;
        margin: 20px;
        padding:20px;
      
        
      }
      .img-container{
      display: flex;
      width: 100%;
      align-items: left;
      justify-self: left;
      justify-content: left;
      margin-bottom: 20px;
      padding: 10px;
      padding-left: 4%;
    }

    .image {
      width: 220px;
    }
    .search-container {
      display: flex;
      flex-direction: row;
      margin-bottom: 30px;
      margin-top: 20px;
    }
    .print-icon {
      cursor: pointer;
      margin-left: auto;
    }
    .button {
      letter-spacing:1px; 
      width:100px;
      height: 38px;
      border: none;
      background-color: #5bb7e6;
      cursor: pointer;
      border-radius: 6px;
      color: white;
      font-weight: bold;
      margin-left: 10px;
    }
    .first-table {
      margin-bottom: 50px;
    }
    .tb-heading {
      font-size: 14px;
    }
    .input {
  width: 35%;
  height: 38px;
  border-radius: 6px;
  padding-left: 15px;
  border: solid 1px rgba(128, 128, 128, 0.719) ;
  outline: none;
  
    }
    @media only screen and (min-width: 768px) and (max-width: 900px)  {
      .main-container {
        background-color:#edf0f0;
        margin: 0px;
        padding:40px;
        width: fit-content;
        
      } 
    }
   </style>
  </head>
<body>
<div>
  <div class="main-container">
                      
    <div class="img-container">
        <img alt="logo" src="https://i.postimg.cc/pd5sLV8s/LOG-GREENINDIA1024-1-removebg-preview.png" class="image" />
        <!-- <h3 class="text-center fw-bold p-2 " style = "font-weight:bold;" >User Data</h3> -->
    </div>
  <hr/>
                            
      <form action="<?php echo e(route('web.search')); ?>" method="GET" >

        <div class="search-container">         
          <input type="search" name='query' placeholder="Registered Mobile Number" class="input " style="width:35%;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"/>
          <button type="search" class="button">Search</button>
          <!-- <button type="search"  onclick="printDiv('print-page')"  class="btn btn-primary mb-3 ml-3 " style="letter-spacing:1px; width:100px;" > Print </button> -->
          <div class="print-icon">
          <svg xmlns="http://www.w3.org/2000/svg"  onclick="printDiv('print-page')" width="18" height="18" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
          <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
          <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
          </svg>
          </div>
        </div>


          <!-- first table -->
         <div id="print-page">
          <div class="first-table" id="print-page">
            <?php if(isset($Topusers)): ?>
            <table class="table table-sm text-center table table-bordered  table-responsive-sm" >
              <thead>
                <tr class="tb-heading table-active" >
                    <th>Full Name</th>
                    <th >Phone Number</th>
                    <th>Village</th>
                    <th>Mandal/Dist</th>
                    <th>Crop&Variety</th>
                    <th>Total Acres</th>
                    <th>farming IPM</th>
                    <th>Acres</th>
                    <th>Semi Organics</th>
                    <th>Acres</th>
                    <th>Organics</th>
                    <th>Acres</th>
          
                </tr>
              </thead>
              <tbody class="table-group-divider">
              <?php if(count(array($Topusers)) > 0): ?>
                
                <?php $__currentLoopData = $Topusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="tb-heading">
                  <td><?php echo e($user -> firstName); ?> <?php echo e($user -> lastName); ?> </td>
                  <td><?php echo e($user -> phoneNumber); ?></td>
                  <td><?php echo e($user -> village); ?></td>
                  <td><?php echo e($user -> mandal); ?></td>
                  <td><?php echo e($user -> cropVariety); ?></td>
                  <td><?php echo e($user -> totalAcres); ?></td>      
                  <td><?php echo e($user -> farmingIpm); ?></td>
                  <td><?php echo e($user -> farmingAcres); ?></td>
                  <td><?php echo e($user -> semiOrganics); ?></td>
                  <td><?php echo e($user -> semiAcres); ?></td>
                  <td><?php echo e($user -> organics); ?></td>
                  <td><?php echo e($user -> orgAcres); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <p>No result Found</p>
                <?php endif; ?>
              </tbody>
            </table> 
            <?php endif; ?>
          
          </div>


                  <!-- second table -->
                    <div>
                      <?php if(isset($users)): ?>
                      <table class="table table-sm text-center table-bordered  table-hover table-responsive-sm " >
                        <thead class="overflow-auto">
                          <tr class="tb-heading table-active">
                              <th style="width:100px;">Date</th>
                              <th>Manure/Organic-Chemical</th>
                              <th>Drip</th>
                              <th>Crop Condition</th>
                              <th>Age Of Crop</th>
                              <th>Spraying Serial</th>
                              <th>Spraying Combination</th>
                              <th>Quantity</th>
                              <th>Remarks</th>
                              <th>Files</th>
                    
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php if(count(array($users)) > 0): ?>
                          
                          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class="tb-heading">
                            <td><?php echo e($user -> date); ?></td>
                            <td><?php echo e($user -> manureOrganic); ?></td>
                            <td><?php echo e($user -> drip); ?></td>
                            <td><?php echo e($user -> cropCondition); ?></td>
                            <td><?php echo e($user -> ageOfCrop); ?></td>
                            <td><?php echo e($user -> sprayingSerial); ?></td>
                            <td><?php echo e($user -> sprayingCombination); ?></td>
                            <td><?php echo e($user -> quantity); ?></td>
                            <td ><?php echo e($user -> remarks); ?></td>
                            <td><?php echo e($user -> files); ?></td>
                            
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?> 
                          <tr><td>No result found</td></tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                      <?php endif; ?>
                    </div>
         </div>
                      </form>   
                    



  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
    <script type="text/javascript">
     function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\larvelbackend\resources\views/userview.blade.php ENDPATH**/ ?>