<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Transfer Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-3">
                <form action="{{route('verify-account')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <input type="number" name="account_number" id="account_number" class="form-control" placeholder="Enter Account Number">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="number" name="bank_code" id="bank_code" class="form-control" placeholder="Enter Bank Code">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" value="Verfy Account" class="btn btn-secondary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function(){
            $.ajax({
                type: "get",
                url: "{{URL::to('banks')}}",
                dataType: "json",
                success: function (response) {
                    console.log(response);
                }
            });
        })
    </script>
</body>
    
</html>