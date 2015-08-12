<html>
<head></head>

<body>

    <h1>Index clanaka</h1>

    <a href="/create">Novi clanak</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naslov</th>
                <th>Sadrzaj</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>