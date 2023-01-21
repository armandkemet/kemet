<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nous contacter</title>
</head>
<body>
        <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm">

        <!-- Name input -->
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" required />
            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
        </div>

        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required" required>Message is required.</div>
        </div>

    

        <!-- Form submit button -->
        <div class="d-grid">
            <center><a href="mailto: armandkemtiyu@gmail.com"><button class="btn btn-primary btn-lg" type="submit">Envoyer</button></a></center>
        </div>

        </form>

        </div>
</body>
</html>