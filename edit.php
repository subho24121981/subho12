<form method="post" action="<?php echo base_url('update/'.$subject->id);?>">
    <div>
        <div>
            <div>
                <label>Id</label>
                <div>
                    <input type="text" name="title"  value="<?php echo $subject->id; ?>">
                </div>
            </div>
        </div>
		<div>
        <div>
            <div>
                <label>User_id</label>
                <div>
                    <input type="text" name="title"  value="<?php echo $subject->user_id; ?>">
                </div>
            </div>
        </div>
		<div>
        <div>
            <div>
                <label>Subject_title</label>
                <div>
                    <input type="text" name="title"  value="<?php echo $subject->subject_title; ?>">
                </div>
            </div>
        </div>
		<div>
        <div>
            <div>
                <label>subject_name</label>
                <div>
                    <input type="text" name="title"  value="<?php echo $subject->name; ?>">
                </div>
            </div>
        </div>
        <div>
            <div>
                <label>Subject_description</label>
                <div>
                    <textarea name="description" class="form-control"><?php echo $subject->description; ?></textarea>
                </div>
            </div>
        </div>
        <div>
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>