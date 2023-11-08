<?php if(isset($_SESSION['message']))
{
?>  
<p class="message <?= isset($error) ?'error' : '' ?> "><?= $_SESSION['message'] ?></p>  
<?php   
    unset($_SESSION['message']); 
} 
?>     
<a href="/employee/add">Add New Employee</a>   
<h2>OUR EMPLOYESS</h2>
   
<table class="table">
    <thead>
        <tr>
            <th class="table-data">Name</th>
            <th class="table-data">Age</th>
            <th class="table-data">Address</th>
            <th class="table-data">tax %</th>
            <th class="table-data">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if( false !== $employees )
            {
                foreach( $employees as $employee)
                {
        ?>         
        <tr>
            <td class="table-data"> <?=$employee->name ?> </td>
            <td class="table-data"> <?=$employee->age ?> </td>
            <td class="table-data"> <?=$employee->address ?> </td>
            <td class="table-data"> <?=$employee->tax ?> </td>
            <td class="table-data"> 
                <a href="/employee/edit/<?= $employee->id ?>">edit</a>
                <a href="/employee/delete/<?= $employee->id ?>"  onclick="if(!confirm('<?= $text_delete_confirm ?>')) return false;" >delete</a>
            </td>
        </tr>   
        <?php
                }
            }else
            {
        ?> 
        <td>soorrry no employee to list</td>
        <?php
            }
        ?>