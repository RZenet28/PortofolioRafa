<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 1000px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 20px;
            overflow-x: auto;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 1.8rem;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .button-container a {
            text-decoration: none;
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        .btn-create {
            background-color: #007bff;
        }
        .btn-create:hover {
            background-color: #0056b3;
        }
        .btn-dashboard {
            background-color: #28a745;
        }
        .btn-dashboard:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-links {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }
        .action-links a, .btn-delete {
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        .btn-view {
            background-color: #17a2b8;
        }
        .btn-view:hover {
            background-color: #138496;
        }
        .btn-edit {
            background-color: #ffc107;
            color: #212529;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        
        /* Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }
            table {
                font-size: 0.9rem;
            }
            th, td {
                padding: 8px;
            }
            .button-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Certificate List</h1>
        <div class="button-container">
            <a href="{{ route('certificate.create') }}" class="btn-create">Create New Certificate</a>
            <a href="/admin/dashboard" class="btn-dashboard">Dashboard</a>
        </div>
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Issued By</th>
                    <th>Issued At</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $id = 1; @endphp
                @foreach ($certificate as $cert)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $cert->name }}</td>
                        <td>{{ $cert->issued_by }}</td>
                        <td>{{ $cert->issued_at }}</td>
                        <td>{{ $cert->description }}</td>
                        <td class="action-links">
                            <a href="{{ route('certificate.show', $cert->id) }}" class="btn-view"><i class="fas fa-eye"></i> View</a>
                            <a href="{{ route('certificate.edit', $cert->id) }}" class="btn-edit"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('certificate.destroy', $cert->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    </div>
</body>
</html>
