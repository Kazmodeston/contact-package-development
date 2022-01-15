<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Contact Page</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <form action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="Name">Enter your Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required />
                                    <span class="text-danger">Name is required</span>
                                </div>

                                <div class="form-group">
                                    <label for="Email">Enter your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required />
                                    <span class="text-danger">Email is required</span>
                                </div>

                                <div class="form-group">
                                    <label for="Message">Enter your Message</label>
                                    <textarea name="message" style="resize: none;" class="form-control" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                                    <span class="text-danger">Message is required</span>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary" />
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>