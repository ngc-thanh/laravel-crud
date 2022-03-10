<h1>一覧表</h1>
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>電話番号</th>
        <th>メール</th>
    <tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member->id}}</td>
        <td>{{$member->name}}</td>
        <td>{{$member->telephone}}</td>
        <td>{{$member->email}}</td>
    </tr>
    @endforeach
</table>