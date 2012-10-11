<div class="latest_updates">
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 220,
  height: 260,
  theme: {
    shell: {
      background: '#5c0000',
      color: '#ffffff'
    },
    tweets: {
      background: '#7a0400',
      color: '#ffffff',
      links: '#ebcd07'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('hostalstlucia').start();
</script>
<?php echo $this->element('facebook',array('mode'=>'h','url'=>'http://www.facebook.com/hostalstalucia')); ?>
</div>
