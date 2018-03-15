<template>
  <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
                <!-- timeline time label -->
            <div v-for="item in achievements" class="timeline-item" :key="item.id">
                <li :key="item.id" class="time-label">
                    <span class="bg-yellow">
                        {{item.date}}
                    </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                <i :class="getIcon(item)"></i>

                <div class="timeline-item" :key="item.id">

                    <h3 class="timeline-header"><a href="#">{{item.title}}</a></h3>

                    <div class="timeline-body">
                        {{item.description}}
                    </div>
                </div>
                </li>
                <!-- END timeline item -->
            </div>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</template>
<script>
export default {
    created () {
        this.getAllCategories();
    },
    props:['achievements'],
    data(){
        return{
            categories:[]
        }
    },
    methods:{
        getAllCategories(){
            axios.get('/get-all-achievement-categories').then((response)=>{
                this.categories = response.data;
            });
        },
        getIcon(item){
            var val ='';
            for(var i = 0; i < this.categories.length; i++){
                if(this.categories[i].id == item.category){
                    val = this.categories[i].icon;
                }
            }
            val = val + ' bg-blue';
            return val;
        }
    }

}
</script>
<style>
.timeline {
  position: relative;
  margin: 0 0 30px 0;
  padding: 0;
  list-style: none;
}
.timeline:before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 4px;
  background: #ddd;
  left: 31px;
  margin: 0;
  border-radius: 2px;
}
.timeline > .timeline-item > li {
  position: relative;
  margin-right: 10px;
  margin-bottom: 15px;
}
.timeline > .timeline-item > li:before,
.timeline > .timeline-item > li:after {
  content: " ";
  display: table;
}
.timeline > .timeline-item > li:after {
  clear: both;
}
.timeline > .timeline-item > li > .timeline-item {
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: 3px;
  margin-top: 0;
  background: #fff;
  color: #444;
  margin-left: 60px;
  margin-right: 15px;
  padding: 0;
  position: relative;
}
.timeline > .timeline-item > li > .timeline-item > .time {
  color: #999;
  float: right;
  padding: 10px;
  font-size: 12px;
}
.timeline > .timeline-item > li > .timeline-item > .timeline-header {
  margin: 0;
  color: #555;
  border-bottom: 1px solid #f4f4f4;
  padding: 10px;
  font-size: 16px;
  line-height: 1.1;
}
.timeline > .timeline-item > li > .timeline-item > .timeline-header > a {
  font-weight: 600;
}
.timeline > .timeline-item > li > .timeline-item > .timeline-body,
.timeline > .timeline-item > li > .timeline-item > .timeline-footer {
  padding: 10px;
}
.timeline > .timeline-item > li > .fa,
.timeline > .timeline-item > li > .glyphicon,
.timeline > .timeline-item > li > .ion {
  width: 30px;
  height: 30px;
  font-size: 15px;
  line-height: 30px;
  position: absolute;
  color: #666;
  background: #d2d6de;
  border-radius: 50%;
  text-align: center;
  left: 18px;
  top: 0;
}
.timeline > .timeline-item > .time-label > span {
  font-weight: 600;
  padding: 5px;
  display: inline-block;
  background-color: #fff;
  border-radius: 4px;
}
.timeline-item > .timeline-inverse > li > .timeline-item {
  background: #f0f0f0;
  border: 1px solid #ddd;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.timeline-item > .timeline-inverse > li > .timeline-item > .timeline-header {
  border-bottom-color: #ddd;
}


</style>


