@extends('layouts.website')
@section('title', 'Dasboard')

@push('page-title')
    Service Archives
@endpush
@push('custom-styles')
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
@endpush
@push('page-content')
{{-- <div id="myapp"> --}}
<div class="max-w-8xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="grid grid-rows-2 md:grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-3 row-span-2">
            <div class="mb-2 h-auto md:w-full lg:w-full bg-black flex justify-center items-center">
                @if($video_iframe == false)
                    <video class="video-js vjs-big-play-centered vjs-16-9" data-setup='{"controls": true, "autoplay": true, "preload": "auto"}'>
                        <source src="{{ $service->link ?? '' }}" type="video/mp4">
                    </video>
                @else
                    {!! $video_iframe !!}
                @endif
            </div>
            <div class="flex flex-col w-full">
                <div class="flex flex-wrap justify-between">
                    <span class="px-4">
                    <p class="pt-4 pb-1 text-lg text-gray-700">{{ $service->title ?? 'No Broadcast' }}</p>
                         <p class="pb-4 pt-1 text text-gray-500">{{ $service->start_date->toFormattedDateString() }}</p>
                    </span>
                    <div class="mt-2">
                      <button class="my-2 mx-1 inline-flex items-center shadow-md px-8 py-2 border border-transparent text-sm leading-5 font-medium rounded-full  text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"> 
                        <i class="las la-phone-alt text-2xl"></i>  MTN Mobile Money  055 343 2170
                      </button>
                      <button v-on:click="payment_modal = true" class="my-2 mx-1 inline-flex items-center shadow-md px-8 py-2 border border-transparent text-sm leading-5 font-medium rounded-full  text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"> 
                        <i class="lab la-cc-visa mr-1 text-2xl"></i><i class="lab la-cc-mastercard mr-1 text-2xl"></i><i class="las la-mobile-alt mr-1 text-2xl"></i> Click to Pay Online with Card or MoMO
                      </button>

                      <div style="display: none"  v-show="payment_modal" class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center">
                        <div v-show="payment_modal"vx-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
                          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                        <div v-show="payment_modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6">
                          <div>
                            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                              <svg class="h-6 w-6 text-green-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                              </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                              <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Give Online
                              </h3>
                              <div class="mt-2">
                                <p class="text-sm leading-5 text-gray-500">
                                  Pay with Your Visa, Master Card or Mobile Money.
                                </p>
                                <div>
                                  <div class="mt-6 sm:mt-5  sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="payment_category" class="block text-left my-1 text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                      Category
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                      <div class="rounded-md shadow-sm">
                                        <select id="payment_category" v-model="payment_category" class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                          <option value="" disabled>Select Payment Category</option>
                                          <option v-for="category in payment_categories" v-bind:value="category.id" >@{{ category.title }}</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <label for="phone" class="my-2 text-left  my-1   block text-sm font-medium leading-5 text-gray-700">Mobile Money Number</label>
                                  <div class="mt-1 relative rounded-md shadow-sm">
                                      <div class="absolute inset-y-0 left-0 flex items-center">
                                        <select aria-label="Country" class="form-select h-full py-0 pl-3 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm sm:leading-5">
                                          <option>GH</option>
                                          <option>NG</option>
                                        </select>
                                      </div>
                                      <input id="phone" v-model="phone" class="form-input block w-full pl-16 sm:text-sm sm:leading-5" placeholder="233241582764" />
                                    </div>
                                  <label for="amount" class="my-2 text-left  my-1   block text-sm font-medium leading-5 text-gray-700">Amount to give</label>
                                  <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                      <span class="text-gray-500 sm:text-sm sm:leading-5">
                                        ₵
                                      </span>
                                    </div>
                                    <input id="amount" v-model="amount" type="number" class="form-input block w-full pl-7 pr-12 sm:text-sm sm:leading-5" placeholder="0.00" />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                      <span class="text-gray-500 sm:text-sm sm:leading-5">
                                        GHS
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                          </span>
                          <span class="flex w-full rounded-md shadow-sm sm:col-start-1">
                            <button v-on:click="payment_modal = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                              Cancel
                            </button>
                          </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-2">
                              <Rave
                                  style-class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                  :email="email"
                                  :amount="amount"
                                  :customer-phone="phone"
                                  :reference="reference"
                                  :rave-key="raveKey"
                                  :callback="rave_callback"
                                  :close="rave_close"
                                  :customer-firstname="first_name"
                                  :customer-lastname="last_name"
                                  payment-options="ussd, card, account"
                                  hosted-payment=0
                                  custom-title="ECWAVZ 5 Online Church"
                                  currency="GHS"
                                  country="GH"
                              ><i class="lab la-cc-visa mr-1 text-2xl"></i><i class="lab la-cc-mastercard mr-1 text-2xl"></i><i class="las la-mobile-alt mr-1 text-2xl"></i> Pay Now</Rave>
                          
                          </div>
                        </div>
                      </div>
                     
                          

                    </div>
                </div>
                
                <div class="sm:col-span-6 mt-4 px-6 md:px-1">
                    <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                      Comment
                    </label>
                    <div class="mt-1">
                      <textarea id="message" name="message" v-model="message" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 md:w-full lg:w-12/12"></textarea>
                      <span class="inline-flex rounded-md">
                        <button :disabled="submit_comment"  v-on:click="post_comment()" type="button" class=" inline-flex items-center shadow-md px-8 py-2 my-4 border border-transparent text-sm leading-5 font-medium rounded-full  text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                          <span v-show="spinner" class="spinner mr-5"></span> Submit
                        </button>
                      </span>                  
                    </div>
                    <p class="mt-2 text-sm text-gray-500">post your thoughts here.</p>
                </div>
                <div class="w-full my-4 px-6 md:px-1">
                  <div class="bg-white shadow overflow-hidden sm:rounded-md">
                      <ul class=" overflow-y-scroll max-h-96">
                        <div v-for="comment in live_comments">
                          <li class="border-t border-gray-200">
                            <span class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                <div class="flex  flex-col items-start px-4 py-4 sm:px-6">
                                  <div>
                                      <div class="min-w-0 flex-1 flex items-center">
                                          <div class="flex-shrink-0">
                                              {{-- <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" /> --}}
                                              <div class="h-8 w-8 rounded-full bg-white">
                                                <i class="las la-user-alt text-3xl text-indigo-600"></i>
                                              </div>
                                          </div>
                                          <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                              <div>
                                                  <div class="text-sm leading-5 font-medium text-indigo-600 truncate">@{{ comment.user == null ? 'user' : comment.user.name }}</div>
                                              </div>
                                          </div>
                                  </div>
                                  <div class="py-2 text-sm text-gray-500">
                                    @{{ comment.message }}
                                    <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mt-0 py-2">
                                      <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                      </svg>
                                      <span>
                                          <time datetime="2020-01-07">@{{ dateFormat(comment.created_at) }}</time>
                                      </span>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                              </span>
                          </li>
                        </div>

                        <p v-if="live_comments == ''" class="p-4">No Comment. Be the first to comment</p>

                      </ul>
                    </div> 
              </div>
            </div>
        </div>
        <div class="md:col-span-1 col-span-4 md:row-span-2 m-1 lg:m-0 xl:m-0 flex md:flex-col flex-wrap">
            <p class="p-1 px-3 py-3 tex-gray-700 hidden lg:block text-2xl"> Service Archives </p>
            @forelse ($services as $s)
            <a href="../videos/{{ $s->id }}">
                <div class="h-auto md:max-w-xs  md:min-w-0 min-w-18 my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                    <span class="rounded-full bg-white">
                        <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                    </span>
                    <p class="text-lg mt-2 font-bold px-4 max-w-xl">{{ $s->title }}</p>
                    <time class="text-sm">{{ $s->created_at->diffForHumans() }}</time>
                </div>
            </a>
            @empty
            <p class="p-4">No Videos. Thank you</p>
            @endforelse
           
        </div>
    </div>
</div>
{{-- </div> --}}
@endpush
@push('custom-scripts')
<script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
<script>
var timezone = "{{ $timezone }}";

var service = <?= json_encode($service); ?>

var payment_categories = <?= json_encode($payment_categories); ?>

var user = <?= json_encode($user); ?>

var comments = <?= json_encode($service->comments); ?>

const app = new Vue({
    el: '#myapp',
data: function(){
    return{
            payment_modal: false,
            raveKey: 'FLWPUBK-1beb6ca9cea567480a782f5f99294d64-X',
            email: user.email,
            amount: 0,
            phone: '',
            fname: '',
            lname: '',
            payment_category: '',
            data: '',
            service: service,
            user: user,
            comments: comments,
            message: '',
            submit_comment: false,
            spinner: false,
            payment_categories: payment_categories

        }
    },

    computed: {
        live_comments: function(){
            return this.comments;
        },

        first_name(){
          try {
              this.fname = user.name.split(' ')[0]
            } catch (error) {
              console.log(error);
              this.fname = user.name;
            }
            return this.fname
        },

        last_name(){
          try {
            this.lname = user.name.split(' ')[1]
          } catch (error) {
            return 
          }
          return this.lname;
        },

        reference(){
          let text = "";
          let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

          for( let i=0; i < 10; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));

          return text;
        }
    },

    methods: {
      rave_callback: function(response){
        this.amount = ''
        this.payment_modal = false
        if(response.data.status == 'success'){
          axios.post('../payments', {
              church: this.service.church_id,
              service: this.service.id,
              user: this.user.id,
              amount: this.amount,
              payment_category: this.payment_category
          }).then(function(response){

              console.log(response.data);
          }).catch(function(e){
        
              console.log(e);
          })
        }
      
        console.log(response)
      },
      rave_close: function(){
        console.log("Payment closed")
      },

      dateFormat: function(d){
        var date = Moment.tz(d, timezone).fromNow();
        // console.log(date);
        if(date == "Invalid date"){
          return d
        }
        return date;
        
      },

      post_comment: function(){
         var self = this;
         this.submit_comment = true;
         this.spinner = true;
          axios.post('../comments', {
              church: this.service.church_id,
              service: this.service.id,
              user: this.user.id,
              message: this.message
          }).then(function(response){
              self.comments.unshift(response.data);
              self.submit_comment = false;
              self.spinner = false;
              self.message = '';
              console.log(response.data);
          }).catch(function(e){
              submit_comment = false   
              self.spinner = false;
              console.log(e);
          })
        },


        attendance_count: function(){
            if(service != null){
                axios.post('../attendance_count', {
                    service: this.service.id,
                    count: 1
                }).then(function(r){
                    
                }).catch(function(e){
                    
                })
            }
        },

    },

    mounted: function(){

      setInterval(function(){ 
          this.attendance_count();
        },500000
      );

        this.attendance_count();
    }


})

</script>
@endpush