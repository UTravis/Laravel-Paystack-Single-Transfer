<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Initiate Transfer</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-3 mt-3">
                <form action="{{route('transfer')}}" method="post">
                    @csrf
                    <input type="hidden" name="recipient_code" value="{{$recipient_code}}" >
                    <div class="mt-3">
                        <input type="text" name="account_name" id="account_name", class="form-control" value="{{$account_name}}" disabled>
                    </div>
                    <div class="mt-3">
                        <input type="number" name="account_number" id="account_number", class="form-control" value="{{$account_number}}" disabled>
                    </div>
                    <div class="mt-3">
                        <input type="text" name="bank_name" id="bank_name", class="form-control" value="{{$bank_name}}" disabled>
                    </div>
                    <div class="mt-3">
                        <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter Amount to Transfer" required>
                    </div>
                    <div class="mt-3">
                        <input type="text" name="reason" id="reason" class="form-control" placeholder="Reason for transfer">
                    </div>
                    <div class="mt-3 d-grid gap-2">
                        <input type="submit" value="Transfer" class="btn btn-secondary ">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>