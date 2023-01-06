
     


     
        <div class="row g-4">
            @foreach ($articles as $article)
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    {{-- <img src="{{$article->image}}" alt=""> --}}
                    <h5>{{$article->title}}</h5>
                    <p>{{$article->content}}</p>
                </div>
            </div>
            @endforeach
        </div>
          

            
            
            
            
       

      
      

        
        {{--BOOTSTRAP JS  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      
                <script>
                    $('#projects-slider').owlCarousel({
                        loop: true,
                        nav: false,
                        items: 2,
                        dots: true,
                        smartSpeed: 600,
                        center: true,
                        autoplay: true,
                        autoplayTimeout: 4000,
                        responsive: {
                            0: {
                                items: 1
                            },
                            768: {
                                items: 2,
                                margin: 8,
                            }
                        }
                    })
                </script>
      
    
    </body>
</html>
