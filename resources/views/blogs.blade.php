<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>أخر الفعاليات و النشاطات</h6>
                    <h1>Lorem, ipsum.</h1>
                    <p class="mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda impedit ipsam quas nemo? Eius quisquam qui quaerat nesciunt tenetur ab consequuntur totam ducimus at!</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                
            
            <div class="col-md-4">
                <article class="blog-post">
                    <img src="/build/assets/images/project5.jpg" alt="">
                    <a href="#" class="tag">Web Design</a>
                    <div class="content">
                        <small>{{$article->created_at}}</small>
                        <h5>{{$article->title}}</h5>
                        <p>{{$article->content}}</p>
                    </div>
                </article>
            </div>
            @endforeach
            {{-- <div class="col-md-4">
                <article class="blog-post">
                    <img src="/build/assets/images/project4.jpg" alt="">
                    <a href="#" class="tag">Programming</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="blog-post">
                    <img src="/build/assets/images/project2.jpg" alt="">
                    <a href="#" class="tag">Marketing</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from</p>
                    </div>
                </article>
            </div> --}}
        </div>
    </div>
</section>