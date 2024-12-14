<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Skill</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            animation: fadeIn 1s ease;
        }
        h2 {
            color: #333;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        label {
            display: block;
            color: #555;
            margin-bottom: 5px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 12px 15px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s ease;
            outline: none;
            background-color: #f9f9f9;
        }
        input[type="text"]:focus, textarea:focus {
            border-color: #007bff;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }
        textarea {
            resize: none;
            height: 100px;
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .btn-primary:active {
            background-color: #004494;
            transform: translateY(1px);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    .btn-back {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #6c757d;
        color: #ffffff;
        text-align: center;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        margin-top: 10px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-back:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
    }
    .btn-back:active {
        background-color: #494e52;
        transform: translateY(1px);
    }
</style>

</head>
<body>

<div class="form-container">
    <h2>Update Skill</h2>
    <form action="{{ route('skill.update', $skill) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $skill->Title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required>{{ $skill->description }}</textarea> 
        </div>
        <button type="submit" class="btn-primary">Update</button>
        <a href="javascript:history.back()" class="btn-back">Back</a>

    </form>
</div>

</body>
</html>
