<!DOCTYPE html>
<html>
    <style>
        form{
            width: 750px;
            margin:0 auto ;
        }
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 750px;
        margin:0 auto ;
        }
    </style>
    <body>

        <!-- <h3>Using CSS to style an HTML Form</h3> -->

        <div>
            <form action="/employee/add" method="post">
                <label for="name">Name</label>
                <input type="text"  name="name" value="<?= $employee->name ?>">

                <label for="age">Age</label>
                <input type="text"  name="age" value="<?= $employee->age ?>">

                <label for="address">Address</label>
                <input type="text"  name="address" value="<?= $employee->address ?>">

                <label for="tax">Tax</label>
                <input type="text"  name="tax" value="<?= $employee->tax ?>">

                <label for="salary">salary</label>
                <input type="text"  name="salary" value="<?= $employee->salary ?>">

                <!-- <label for="country">Country</label>
                <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option> 
                </select>-->
            
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    </body>
</html>