struct PostCategory: Codable {
var id : Int
var post_id : Int
var category_id : Int

var posts : [Posts]
var categories : [Categories]

}
