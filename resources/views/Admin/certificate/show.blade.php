<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 800px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: relative;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 1rem;
            margin-bottom: 10px;
            line-height: 1.6;
        }
        strong {
            color: #007bff;
        }
        .document-container {
            margin-top: 20px;
            text-align: center;
        }
        .document-container h2 {
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .document-viewer {
            width: 100%;
            height: 600px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            .document-viewer {
                height: 400px;
            }
        }
        @media (max-width: 480px) {
            h1 {
                font-size: 1.5rem;
            }
            p {
                font-size: 0.9rem;
            }
            .document-viewer {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Tombol Kembali -->
        <a href="javascript:history.back()" class="btn-back">Back</a>

        <h1>Certificate Details</h1>

        <p><strong>Name:</strong> {{ $certificate->name }}</p>
        <p><strong>Issued By:</strong> {{ $certificate->issued_by }}</p>
        <p><strong>Issued At:</strong> {{ $certificate->issued_at }}</p>
        <p><strong>Description:</strong> {{ $certificate->description }}</p>

        <div class="document-container">
            <h2>Certificate Document</h2>
            <div class="document-viewer">
                <embed src="{{ asset('storage/' . $certificate->file) }}" type="application/pdf" width="100%" height="100%" />
            </div>
        </div>
    </div>
</body>
</html>
