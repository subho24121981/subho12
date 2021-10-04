<div>
    <div>           
        <h2>Subject CRUD           
            <div>
               <a  href="<?php echo base_url('create') ?>"> Create New Subject</a>
            </div>
        </h2>
     </div>
</div>
<div>
<table>
  <thead>
      <tr>
		  <th>Id</th>
          <th>User_id</th>
		  <th>subject_name</th>
          <th>Subject_Title</th>
          <th>Subject_Description</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->Id; ?></td>
          <td><?php echo $d->User_id; ?></td>
          <td><?php echo $d->subject_name; ?></td>          
		  <td><?php echo $d->subject_description; ?></td>
		  <td><?php echo $d->subject_title; ?></td>
		  
      <td>
        <form method="DELETE" action="<?php echo base_url('delete/'.$d->id);?>">
         <a  href="<?php echo base_url('edit/'.$d->id) ?>"></a>
          <button type="submit" ></button>
		  <button type="submit" value="Convert_pdf"/></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
