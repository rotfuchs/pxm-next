export function initEvents()
{
    let post = $('.postContainer').find('.message');

    if(post.length>0)
        markTreePost(post.data('post_id'));

    Frameset.initClassicFrameset();

    initThreadListUserProfileWindow();
    initThreadListStartTopicFrames();
    initThreadListLastMsgFrames();
    initBrowserHistoryEvents();
    initThreadListReplyCountFrames();
    initTreeEvents();

    function initBrowserHistoryEvents()
    {
        window.onpopstate = function(event) {
            loadThreadListWithPost(event.state.thread_id, event.state.post_id);
        };
    }

    function initThreadListUserProfileWindow()
    {
        let userLinks = $('table.threads').find('.author a');
        let popup;
        let userId;

        userLinks.on('click', function(e) {
            e.preventDefault();

            userId = $(this).data('id');

            popup = window.open('/user/id/'+userId+'/layout/new_window','profile','width=655,height=620,scrolling=auto,scrollbars=1,resizable=0');
            popup.focus();
        });
    }

    function initThreadListStartTopicFrames()
    {
        let topics = $('table.threads').find('.topic a');
        let el;
        let data;

        topics.on('click', function(e) {
            e.preventDefault();
            el = $(this);

            data = {
                'thread_id': $(this).data('thread_id'),
                'post_id': $(this).data('post_id')
            };

            loadThreadListWithPost(data.thread_id, data.post_id, function() {
                history.pushState(data, el.text(), el.prop('href'));
            });
        });
    }

    function initThreadListLastMsgFrames()
    {
        let lastMsgs = $('table.threads').find('.lastMsg a');
        let el;
        let data;

        lastMsgs.on('click', function(e) {
            e.preventDefault();
            el = $(this);

            data = {
                'thread_id': $(this).data('thread_id'),
                'post_id': $(this).data('post_id')
            };

            loadThreadListWithPost(data.thread_id, data.post_id, function() {
                history.pushState(data, el.text(), el.prop('href'));
            });
        });
    }

    function initThreadListReplyCountFrames()
    {
        let replyCounts = $('table.threads').find('.replyCount a');
        let el;
        let data;

        replyCounts.on('click', function(e) {
            e.preventDefault();
            el = $(this);

            data = {
                'thread_id': $(this).data('thread_id'),
                'post_id': $(this).data('post_id')
            };

            loadThread(data.thread_id, function() {
                history.pushState(data, el.text(), el.prop('href'));
            });
        });
    }

    function initTreeEvents()
    {
        let posts = $('.tree').find('a.subject');
        let data;
        let el;

        posts.on('click', function(e) {
            e.preventDefault();
            el = $(this);

            data = {
                'thread_id': $(this).data('thread_id'),
                'post_id': $(this).data('post_id')
            };

            loadPost(data.post_id, function() {
                history.pushState(data, el.text(), el.prop('href'));
            })
        });
    }

    function initPostEvents() {

    }

    function loadThreadListWithPost(thread_id, post_id, callback) {
        $.ajax({
            url: '/thread/get-message-tree-json',
            data: {
                'thread_id': thread_id,
                'post_id': post_id
            },
            method: 'GET',
            dataType: 'json'
        }).done(function( response ) {
            if(response.success===true) {
                $('.postTreeContainer .wrapper').html(response.tree);
                $('.postContainer .wrapper').html(response.message);
                initTreeEvents();
                markTreePost(post_id);

                if(typeof callback === 'function')
                    callback(response);
            }
        });
    }

    function loadThread(thread_id, callback) {
        $.ajax({
            url: '/thread/get-tree-json',
            data: {
                'thread_id': thread_id
            },
            method: 'GET',
            dataType: 'json'
        }).done(function( response ) {
            if(response.success===true) {
                $('.postTreeContainer .wrapper').html(response.tree);
                initTreeEvents();
                markTreePost(0);

                if(typeof callback === 'function')
                    callback(response);
            }
        });
    }

    function loadPost(post_id, callback) {
        $.ajax({
            url: '/post/get-message-json',
            data: {
                'post_id': post_id
            },
            method: 'GET',
            dataType: 'json'
        }).done(function( response ) {
            if(response.success===true) {
                $('.postContainer .wrapper').html(response.message);
                markTreePost(post_id);
                initPostEvents();

                if(typeof callback === 'function')
                    callback(response);
            }
        });
    }

    function markTreePost(post_id) {
        let prefixes = $('.tree').find('.prefix');
        let currentPostPrefix = $('.prefixItem'+post_id);

        prefixes.removeClass('icon-arrow-right');

        if(currentPostPrefix.length>0) {
            currentPostPrefix.addClass('icon-arrow-right');
            $('#postItem'+post_id+' a')
                .focus()
                .blur();
        }
    }
}