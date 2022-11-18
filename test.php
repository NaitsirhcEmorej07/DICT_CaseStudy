<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/city.js"></script>
    <title>Document</title>
</head>
<body>
    <select id="list_province" name="select" class="custom-select">
        <option value="--select one--" >--select one--</option>
        <script>
            for (const [key] of Object.entries(cities)) {
                document.write(`<option>${key}</option>`);
            }
            
        </script>
    </select>
    <script>
        // for (const [key] of Object.entries(cities)) {
        //     console.log(`<option>${key}</option>`);
        // }
            
    </script>
    

    
</body>
</html>