<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Enter OTP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offfset-lg-4 col-lg-4">
                <form action="{{route('finalizeTransfer')}}" method="post">
                    @csrf
                    <input type="hidden" name="transfer_code" value="{{$transfer_code}}">
                    <div class="mt-3">
                        <input type="text" class="form-control" placeholder="Enter OTP" name="otp">
                    </div>
                    <div class="mt-3 d-grid gap-2">
                        <input type="submit" class="btn btn-secondary" value="Confirm">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>