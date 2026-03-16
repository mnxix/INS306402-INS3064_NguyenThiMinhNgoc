# INS306402-INS3064_NguyenThiMinhNgoc
# Session 06 – Database Design

## Part 1: Normalization

| Table Name | Primary Key | Foreign Key | Normal Form | Description |
|-------------|-------------|-------------|-------------|-------------|
| Authors | id | None | 3NF | Stores information about blog authors |
| Posts | id | author_id | 3NF | Stores blog posts written by authors |
| Comments | id | author_id, post_id | 3NF | Stores comments written by users on posts |
| Tags | id | None | 3NF | Stores tags for categorizing posts |
| Post_Tags | post_id, tag_id | post_id, tag_id | 3NF | Junction table connecting posts and tags |

Explanation:

1NF  
- Each column contains atomic values.  
- No multiple values in one column.

Example:  
Instead of storing multiple tags in one column, we create a separate table.

2NF  
- All non-key attributes depend on the entire primary key.

Example:  
In Post_Tags table, the primary key is (post_id, tag_id).  
There are no attributes that depend on only part of the key.

3NF  
- No transitive dependencies.

Example:  
Author information is stored in Authors table, not duplicated in Posts table.

---

## Part 2: Relationships

### Author → Posts
Relationship: **One-to-Many (1:N)**  
One author can write multiple posts.

### Post → Comments
Relationship: **One-to-Many (1:N)**  
One post can have many comments.

### Post → Tags
Relationship: **Many-to-Many (N:N)**  
One post can have multiple tags and one tag can belong to multiple posts.

Implemented using a **junction table: Post_Tags**.