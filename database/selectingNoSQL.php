<?php $title = 'Learn Database Management @ DevOpsNoob.com'; ?>
<?php include '../includes/header.php'; ?>
        	<div class="jumbotron">
        	  <div class="container text-center">
        		<h1>Learn Database Management @ DevOpsNoob</h1>
        	  </div>
        	</div>
        	<div class="container-fluid bg-3 text-center">
              <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>db.php">Databases</a></li>
                        <li class="breadcrumb-item"><a href="<?= $siteRoot; ?>database/dbManagement.php">Database Management</a></li>
                        <li class="breadcrumb-item active">Selecting a NoSQL Database</li>
                    </ol>
                    <div class="text-left">
                      <h2>Selecting a NoSQL Database</h2>
                      <p>
                        There are four different types of NoSQL databases: Graph, Document, Column and Key-Value.  Each type of NoSQL database has  strengths and weaknesses; some types of NoSQL databases are better suited to certain tasks than others.  The selection of a NoSQL database that meets the needs of the client is the most critical consideration.<sup><a href="#fn1" id="ref1">1</a></sup>
                      </p>
                      <figure>
                        <img class="img-responsive centered noShadow" src="<?= $siteRoot; ?>images/database/4NoSQLDatabases.png">
                        <figcaption>The 4 Types of NoSQL Databases</figcaption>
                      </figure>
                      <h3>Strengths &amp; Weaknesses of a Graph Database<sup><a href="#fn2" id="ref2">2</a></sup></h3>
                      <p>
                        Graph databases provide excellent performance for deeply connected data that has many relationships and complex joins.  Information that can be visualized as a graph is an excellent candidate for a graph database.  Rather than tables, the units in a graph database are called nodes.  Graph databases are flexible in the data they collect; each node can have its own internal structure.
                      </p>
                      <p>
                        Graph databases may not scale as well as other NoSQL databases as they are arranged in clusters and only the master cluster can scale. Adding nodes is a slower process than the same process in a column databases as graph databases retain more relationship mapping.
                      </p>
                      <figure>
                        <img class="img-responsive centered noShadow" src="<?= $siteRoot; ?>images/database/GraphDatabase.png">
                        <figcaption>Visualization of a Graph Database</figcaption>
                      </figure>
                      <p>
                        Examples of graph databases include:
                      </p>
                      <ol><strong>
                        <li><a href="https://neo4j.com/" target="_blank">Neo4J</a></li>
                        <li><a href="https://ontotext.com/products/graphdb/" target="_blank">GraphDB</a></li>
                        <li><a href="http://orientdb.com/" target="_blank">OrientDB</a></li>
                      </strong></ol>
                      <h3>Strengths &amp; Weaknesses of a Document Database<sup><a href="#fn3" id="ref3">3</a></sup></h3>
                      <p>
                        A document-based database doesn’t store data in tables like a relational database.  Instead, everything is stored in a document (often JSON), allowing a flexible database schema.  If a specific attribute doesn’t exist in a record, then the record is still created, simply missing that particular attribute.
                      </p>
                      <p>
                        The main drawback of document databases is related to performance.  Document databases write slower than other NoSQL solutions and often use more RAM.  These limitations can be overcome in the short-term with more powerful hardware, but the overall scalability of document databases makes them an unlikely choice for really big data.<sup><a href="#fn4" id="ref4">4</a></sup>
                      </p>
                      <p>
                        Examples of document databases include:
                      </p>
                      <ol><strong>
                        <li><a href="https://www.mongodb.com/" target="_blank">MongoDB</a></li>
                        <li><a href="http://couchdb.apache.org/" target="_blank">CouchDB</a></li>
                        <li><a href="https://www.elastic.co/products/elasticsearch" target="_blank">ElasticSearch</a></li>
                      </strong></ol>
                      <h3>Strengths &amp; Weaknesses of a Column Database<sup><a href="#fn5" id="ref5">5</a></sup></h3>
                      <p>
                        Column databases store related data in columns separated by semicolons, unlike the traditional rows of a relational database.  All the data that fits into one attribute is stored together making querying the data in one column very fast.  The database has to consult only one area of a file instead of walking through a table row by row.  Writing to a column database is very fast and ideal for huge data streams.  Column databases excel in reporting across one attribute, for example, determining the average age of users.
                      </p>
                      <p>
                        The weakness of a column database is that once a report queries multiple attributes, the process slows down considerably.  Relational databases may be faster than column databases when generating large reports that span multiple attributes and have multiple joins.
                      </p>
                      <p>
                        Examples of column databases include:
                      </p>
                      <ol><strong>
                        <li><a href="https://kudu.apache.org/" target="_blank">Apache Kudu</a></li>
                        <li><a href="https://clickhouse.yandex/" target="_blank">ClickHouse</a></li>
                        <li><a href="http://druid.io/" target="_blank">Druid</a></li>
                      </strong></ol>
                      <h3>Strengths &amp; Weaknesses of a Key-Value Store<sup><a href="#fn6" id="ref6">6</a></sup></h3>
                      <p>
                        In a key-value store, data is stored in a large associative array so each value has a key, and each key points to only one value.  The database is one large file with a huge array stored in it.  The overwhelming advantage of a Key-Value Store is simplicity.  As everything is stored with a key, retrieval is as simple as finding the key.  The database programmer doesn’t have to learn nearly as many data concepts in order to use a key-value store.
                      </p>
                      <p>
                        Common uses for a key-value store include storing data for customer personalization and caching to improve performance.  Unfortunately, the major weakness of a key-value store is its lack of structure.  Information is stored in what is essentially an associative array making it difficult to keep the database organized in a logical, searchable way.
                      </p>
                      <p>
                        Examples of key-value databases include:
                      </p>
                      <ol><strong>
                        <li><a href="http://basho.com/products/" target="_blank">Riak</a></li>
                        <li><a href="https://boilerbay.com/infinitydb/" target="_blank">InfinityDB</a></li>
                        <li><a href="https://www.aerospike.com/" target="_blank">AeroSpike</a></li>
                      </strong></ol>
                      <br />
                      <hr />
                      <div class="footnote">
                        <sup id="fn1">1. Types of NoSQL databases and key criteria for choosing them. (n.d.). Retrieved October 29, 2017, from <a href="http://searchdatamanagement.techtarget.com/feature/Key-criteria-for-choosing-different-types-of-NoSQL-databases" target="_blank">http://searchdatamanagement.techtarget.com/feature/Key-criteria-for-choosing-different-types-of-NoSQL-databases</a>. This article is a great starting point for researching this topic.<a href="#ref1" title="Jump back to footnote 1 in the text.">↩</a></sup><br />
                        <sup id="fn2">2. Al-Saeedi, B. (n.d.). Retrieved October 29, 2017, from <a href="http://alronz.github.io/Factors-Influencing-NoSQL-Adoption/site/Neo4j/Results/Strengths%20and%20Weaknesses/" target="_blank">http://alronz.github.io/Factors-Influencing-NoSQL-Adoption/site/Neo4j/Results/Strengths%20and%20Weaknesses/</a>.<a href="#ref2" title="Jump back to footnote 2 in the text.">↩</a></sup><br />
                        <sup id="fn3">3. (n.d.). Retrieved October 29, 2017, from <a href="https://developer.couchbase.com/documentation/server/3.x/developer/dev-guide-3.0/compare-docs-vs-relational.html" target="_blank">https://developer.couchbase.com/documentation/server/3.x/developer/dev-guide-3.0/compare-docs-vs-relational.html</a>.<a href="#ref3" title="Jump back to footnote 3 in the text.">↩</a></sup><br />
                        <sup id="fn4">4. (n.d.). Retrieved October 29, 2017, from <a href="https://developer.couchbase.com/documentation/server/3.x/developer/dev-guide-3.0/compare-docs-vs-relational.html" target="_blank"> https://developer.couchbase.com/documentation/server/3.x/developer/dev-guide-3.0/compare-docs-vs-relational.html</a>.<a href="#ref4" title="Jump back to footnote 4 in the text.">↩</a></sup><br />
                        <sup id="fn5">5. Weber, A. (2015, October 26). What's Unique About a Columnar Database? | FlyData. Retrieved October 29, 2017, from <a href="https://www.flydata.com/blog/whats-unique-about-a-columnar-database/" target="_blank"> https://www.flydata.com/blog/whats-unique-about-a-columnar-database/</a>.<a href="#ref5" title="Jump back to footnote 5 in the text.">↩</a></sup>
                        <sup id="fn6">6. What is a Key-Value Store? (n.d.). Retrieved October 29, 2017, from <a href="https://www.aerospike.com/what-is-a-key-value-store/" target="_blank">https://www.aerospike.com/what-is-a-key-value-store/</a>.<a href="#ref6" title="Jump back to footnote 6 in the text.">↩</a></sup><br />
                      <br />
                    </div>
                    <?php include '../includes/disqus.php'; ?>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
<?php include '../includes/footer.php'; ?>
