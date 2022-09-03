(function ($) {

  "use strict";

  var key;
  var playlistId; 
  const channelURL      = "https://www.googleapis.com/youtube/v3/channels";
  const playlistURL     = "https://www.googleapis.com/youtube/v3/playlistItems";
  const videoDetailsURL = "https://www.googleapis.com/youtube/v3/videos";

  // convert ISO 8601 duration
  function convertTime(youtube_time) {
    var array = youtube_time.match(/(\d+)(?=[MHS])/gi) || [];
    var formatted = array
      .map(function (item) {
        if (item.length < 2) return "0" + item;
        return item;
      })
      .join(":");
    return formatted;
  }

  // number to k formatter
  function kFormatter(num) {
    return Math.abs(num) > 999
      ? Math.sign(num) * (Math.abs(num) / 1000).toFixed(1) + "k"
      : Math.sign(num) * Math.abs(num);
  }

  //fetching channel info
  function channelInfo(channelUniqueId, channelId) {
    const channelOptions = {
      part: "snippet,contentDetails,statistics",
      id: channelId,
      key: key
    };

    $.getJSON(channelURL, channelOptions, function (data) {
      const title = data.items[0].snippet.title;
      const channelThumb = data.items[0].snippet.thumbnails.default.url;
      const userURL = "https://www.youtube.com/channel/" + channelId;
      const subscriberCount = data.items[0].statistics.subscriberCount;
      const channelVideoCount = data.items[0].statistics.videoCount;
      const channelViewCount = data.items[0].statistics.viewCount;
      $("#"+channelUniqueId+" .htyt-channel-info").append(`
          <div class="htyt-channel-info__image">
            <a href=${userURL} target="_blank">
              <img src=${channelThumb} alt="channel image">
            </a>
          </div>
          <div class="htyt-channel-info__text">
            <h1 class="htyt-title"><a href=${userURL} target="_blank">${title}</a></h1>
            <div class="htyt-info">
              <span class="subscriber">${kFormatter(
                subscriberCount
              )} Subscribers</span>
              <span class="videos">${kFormatter(channelVideoCount)} Videos</span>
              <span class="views">${kFormatter(channelViewCount)} Views</span>
            </div>
          </div>
        `);
      $(".htyt-subscribe-button").append(`
          <a href="https://www.youtube.com/channel/${channelId}?sub_confirmation=1" target="_blank">
            SUBSCRIBE
          </a>
          <span class="count">${kFormatter(subscriberCount)}</span>
        `);
    });
  }

  // first layout
  function videoItems(channelUniqueId, playlistOptions) {
    $.getJSON(playlistURL, playlistOptions, function (data) {
      // get channel info
      let channelId = data.items[0].snippet.channelId;
      channelInfo(channelUniqueId, channelId);

      $.each(data.items, function (i, item) {
        const thumb = item.snippet.thumbnails.medium.url;
        const title = item.snippet.title;
        const videoId = item.snippet.resourceId.videoId;

        const videoOptions = {
          part: "snippet,contentDetails,statistics",
          id: videoId,
          key: key
        };

        //fetching video details
        function getVideoDetails(channelUniqueId) {
          $.getJSON(videoDetailsURL, videoOptions, function (data) {
            const viewCount = data.items[0].statistics.viewCount;
            const likeCount = data.items[0].statistics.likeCount;
            const commentCount = data.items[0].statistics.commentCount;
            const youtube_time = data.items[0].contentDetails.duration;
            const duration = convertTime(youtube_time);

            // remove substring to get the full title
            // remove "htyt-single-video--with-icon" class to remove icon

            $("#"+channelUniqueId+" .htyt-channel-video-area .htyt-container .htyt-video-grid-wrapper").append(`
                  <div class="htyt-single-video htyt-single-video--with-icon">
                    <div class="htyt-single-video__thumb">
                      <a class="htyt-popup-youtube" href="https://www.youtube.com/watch?v=${videoId}">
                        <img src=${thumb} class="img-fluid" alt="">
                        <span class="duration">${duration}</span>
                      </a>
                      <span class="play-icon"><a class="htyt-popup-youtube" href="https://www.youtube.com/watch?v=${videoId}"><svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="htyt-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#212121" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></a></span>
                    </div>
                    <div class="htyt-single-video__text">
                      <h2 class="htyt-title"><a class="htyt-popup-youtube" href="https://www.youtube.com/watch?v=${videoId}">${
              title.substring(0, 50) + "..."
            } </a>
                      </h2>
                      <div class="htyt-info">
                        <span class="views">${kFormatter(viewCount)} ${
              viewCount <= 1 ? "View" : "Views"
            }</span>
                        <span class="likes">${kFormatter(likeCount)} ${
              likeCount <= 1 ? "Like" : "Likes"
            }</span>
                        <span class="comments">${kFormatter(commentCount)} ${
              commentCount <= 1 ? "Comment" : "Comments"
            }</span>
                      </div>
                    </div>
                  </div>
                `);

            //video popup
            $("#"+channelUniqueId+" .htyt-popup-youtube").magnificPopup({
              disableOn: 700,
              type: "iframe",
              mainClass: "mfp-fade",
              removalDelay: 160,
              preloader: false,

              fixedContentPos: false
            });
          });
        }
        getVideoDetails(channelUniqueId);
      });
    });
  }

  //initiliazation
  $(".htyt-channel-area").each(function(){

    let channelUniqueId = $(this).attr("id");
    let dataInfo        = $("#"+channelUniqueId+" .htyt-channel-top-area").data().apidata;

    key                 = dataInfo.api_key;
    playlistId          = dataInfo.channel_id

    const playlistOptions = {
      part: "snippet",
      playlistId: playlistId,
      maxResults: dataInfo.video_limit,
      key: key
    }

    if('one' == dataInfo.layout_style) videoItems(channelUniqueId, playlistOptions);
  });

})(jQuery);
