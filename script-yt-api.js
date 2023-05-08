let nextPageToken = ""
    fetch("https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=UCBapjRd-uyeCTGb_-AMEqYw&maxResults=10&order=date&key=AIzaSyBTVtGsV6qrsxM_h-ZQwR8ksvkaPnujl0Y&pageToken="+nextPageToken)
    .then((result)=>{
        return result.json()
    }).then((data)=>{
        console.log(data)
        let videos = data.items
        nextPageToken = data.nextPageToken
        let videoContainer = document.querySelector(".youtube-container")
        for(video of videos) {
            videoContainer.innerHTML += `
                <h3>${video.snippet.title}</h3>
                <img src="${video.snippet.thumbnails.high.url}">
            `
        }
    })
