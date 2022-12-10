<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
  <table border = "1">
  <tr>
    <td>Title</td>
    <td>Views</td>
    <td>Link</td>
  </tr>
  @foreach ($youtube as $video)
  <tr>
    <td>{{ $video->Title }}</td>
    <td>{{ $video->Views }}</td>
    <td>{{ $video->Link }}</td>
  </tr>
  @endforeach
  </table>
</body>
</html>