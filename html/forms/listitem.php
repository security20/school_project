<!-- Modal -->
<script type="text/javascript">getCharacterOptions();</script>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Place advertisement</h4>
</div>
<div class="modal-body">
  <form action="#">
    <div class="form-group" id="createAdvertisementBox">
      <div class="row">
       <div class="col-sm-6">
        <script type="text/javascript">
        $( "#listingItemInput" ).on( "autocompleteselect", function( event, ui )
        {
          getItemByName(ui.item.value)
        });
        </script>
         <input type="search" oninput="tryAutoComplete('listingItemInput')" class="form-control" id="listingItemInput" placeholder="Search item"/>
         <input type="number" class="form-control" name="itemPrice" id="listingItemPrice" placeholder="price" min="1" max="1000000">
         <input type="number" class="form-control" name="itemAmount" id="listingItemAmount" placeholder="amount for sale" min="1" max="1000">
         <input type="hidden" id="listingItemID" value="0">
       </div>
       <div class="col-sm-6" id="listingItemImage">
         <img class="image-rounded" src="" alt="" width="100" height="100">
       </div>
     </div>
     <br/>
     <div class="row">
      <div class="col-sm-6">
        <label for="listingItemDescription">Item Description </label>
        <p id= "listingItemDescription">
      </div>
      <div class="col-sm-6">
        <p class="lead" id="listingItemName"></p>
      </div>
     </div>

     </p>
     <br/>
     <label for="listingComment">Comment</label>
     <textarea  class="form-control" placeholder="Additional comment" id="listingComment" style="resize:none"></textarea>
     <br/>
     <label for="listingListingType">Select Listing Type </label>
     <select class="form-control" name="listingListingType" id="listingListingType">
       <option value="0">Selling</option>
       <option value="1">Buying</option>
     </select>
     <br/>
     <label for="characterSelect">Select character </label>
     <select name="characterSelect" class="form-control" id="listingCharacter">
       <option value=0>Please add a character in the Characters menu</option>
     </select>
    </div>
</form>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-primary" onclick="addListing()" formmethod="post" style="float: left">Submit</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
