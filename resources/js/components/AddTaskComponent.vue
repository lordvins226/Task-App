<template>
  <div>
    <button
      type="button"
      class="btn btn-primary my-3"
      data-toggle="modal"
      data-target="#exampleModal"
    >Add Task</button>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="name">Task Name</label>
                <textarea name="name" id="name" rows="2" class="form-control" v-model="name"></textarea>
              </div>
              
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" @click="taskStore">Create</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return{
      name: ''
    }
  },
  methods: {
    taskStore(){
        axios.post('http://localhost:8000/tasksList',{
          name: this.name  
        }).then(reponse => this.$emit('task-added',reponse))
          .catch(error => console.log(error));
    }
  }

};
</script>