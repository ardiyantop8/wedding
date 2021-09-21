
// Vue.component('modal',{ //modal
//     template:`
//       <transition
//                 enter-active-class="animated rollIn"
//                      leave-active-class="animated rollOut">
//     <div class="modal is-active" >
//   <div class="modal-card border border border-secondary">
//     <div class="modal-card-head text-center bg-dark">
//     <div class="modal-card-title text-white">
//           <slot name="head"></slot>
//     </div>
// <button class="delete" @click="$emit('close')"></button>
//     </div>
//     <div class="modal-card-body">
//          <slot name="body"></slot>
//     </div>
//     <div class="modal-card-foot" >
//       <slot name="foot"></slot>
//     </div>
//   </div>
// </div>
// </transition>
//     `
// })

var v = new Vue({
   el:'#app',
    data:{
        url:'http://localhost/wedding/',
        addModal: false,
        editModal:false,
        deleteModal:false,
        resepsi:[],

        search: {text: ''},
        emptyResult:false,
        newResepsi:{
            firstname:'',
            lastname:'',
            gender:'',
            birthday:'',
            email:'',
            contact:'',
            address:''},
        chooseUser:{},
        formValidate:[],
        successMSG:'',
        
        //pagination
        currentPage: 0,
        rowCountPage:5,
        totalResepsi:0,
        pageRange:2
    },
     created(){
      this.showAllResepsi(); 
    },
    methods:{
        showAllResepsi(){ axios.get(this.url+"Umum/showAllResepsi").then(function(response){
                 if(response.data.resepsi == null){
                     v.noResult()
                    }else{
                        v.getData(response.data.resepsi);
                    }
            })
        },

         formData(obj){
			var formData = new FormData();
		      for ( var key in obj ) {
		          formData.append(key, obj[key]);
		      } 
		      return formData;
		},
        getData(resepsi){
            v.emptyResult = false; // become false if has a record
            v.totalResepsi = resepsi.length //get total of user
            v.resepsi = resepsi.slice(v.currentPage * v.rowCountPage, (v.currentPage * v.rowCountPage) + v.rowCountPage); //slice the result for pagination
            
             // if the record is empty, go back a page
            if(v.resepsi.length == 0 && v.currentPage > 0){ 
            v.pageUpdate(v.currentPage - 1)
            v.clearAll();  
            }
        },
        
        clearMSG(){
            setTimeout(function(){
			 v.successMSG=''
			 },3000); // disappearing message success in 2 sec
        },
        clearAll(){
            v.newResepsi = { 
            firstname:'',
            lastname:'',
            gender:'',
            birthday:'',
            email:'',
            contact:'',
            address:''};
            v.formValidate = false;
        }
    }
})