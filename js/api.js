console.log("holaaa")



function searchapi(){

    var id=document.getElementById("id").value
    console.log(id)

    
    const fetchData= async() =>{
        try {
           const res = await fetch('https://api.jikan.moe/v3/anime/'+id)
           const data = await res.json()
           pintarcard(data)
        } catch (error) {
            console.log(error);
        }
    }

    const pintarcard= (anime) =>{
        console.log(anime)

        const flex= document.querySelector('.cuerpo')
        const template = document.getElementById("template-card").content
        const clone= template.cloneNode(true)
        const fragment = document.createDocumentFragment()
        
        clone.querySelector('.card-img-top').setAttribute('src',anime.image_url)
        clone.querySelector('.card-title').setAttribute('value',anime.title_english)
        clone.querySelector('.card-number').setAttribute('value',anime.mal_id)
        clone.querySelector('.card-episodes').setAttribute('value',anime.episodes)
        clone.querySelector('.card-score').setAttribute('value',anime.score)
        clone.querySelector('.card-img').setAttribute('value',anime.image_url)

        fragment.appendChild(clone)
        flex.appendChild(fragment)
    }
    fetchData()

}