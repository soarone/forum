
<table>
    <thead>
        <tr>
            <th>板块</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blocks as $block)
        <tr>
            <td><a href="{{url('/forum/block', array('id' => $block->block_id))}}">{{$block->block_name}}</a></td>
        </tr>
        @endforeach
    </tbody>
</table>