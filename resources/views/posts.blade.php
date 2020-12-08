<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              All posts
            </div>
            <div class="card-body">
              @if (Session::has('post_deleted'))
                <div class="alert alert-success" role="alert">
                  {{ Session::get('post_deleted') }}
                </div>
              @endif
              <table class="table">
                <thead>
                  <tr>
                    <th>Post title</th>
                    <th>Post body</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                      <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>  
                        <td> 
                          <form action="{{ route('post.delete', $post->id) }}" method="post">
                            <a href="/posts/{{ $post->id }}" class="btn btn-primary">View</a>
                            <a href="/edit-post/{{ $post->id }}" class="btn btn-info">Edit</a>
                            @csrf 
                            @method('DELETE') 
                            <button type="submit" class="btn btn-danger" >Delete</button>
                          </form>                          
                        </td>
                      </tr>
                  @endforeach                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>