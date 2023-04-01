<h3>Provide the Required Information</h3>
<div id="form-block">
    <form method="POST" action="processes/process.receive.php?action=create">
        <div id="form-block-center">
            <label for="sname">Employee Name</label>
            <input type="text" id="sname" class="input" name="sname" placeholder="Enter employee name.">

            <label for="desc">Day</label>
            <textarea id="desc" class="input" name="desc" placeholder="Monday, Tuesday etc."></textarea>
            
            <label for="amount">Hours</label>
            <input type="text"id="amount" class="input" name="amount" placeholder="Hours of work"/>
        
              </div>
        <div id="button-block">
        <input type="submit" value="Create">
        </div>
  </form>
</div>