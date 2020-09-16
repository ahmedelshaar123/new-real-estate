@if($data == 'featured')
    @foreach($feat_estates as $feat_estate)
        <tr id="removable{{$feat_estate->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$feat_estate->$title}}</td>
            <td class="text-center">{{$feat_estate->$address}}</td>
            <td class="text-center">
                @foreach($feat_estate->photos as $photo)
                    <img src="{{asset($photo->path)}}"
                         alt="" style="height: 50px;">
                @endforeach
            </td>

            <td class="text-center"><a href="{{route('featured-estates.edit', $feat_estate->id)}}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
            </td>
            <td class="text-center">
                <button data-token="{{ csrf_token() }}"
                        data-route="{{URL::route('featured-estates.destroy',$feat_estate->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@elseif($data == 'contacts')
    @foreach($contacts as $contact)
        <tr id="removable{{$contact->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$contact->name}}</td>
            <td class="text-center">{{$contact->email}}</td>
            <td class="text-center">{{$contact->phone}}</td>
            <td class="text-center">{{$contact->title}}</td>
            <td class="text-center">{{$contact->message}}</td>
            <td class="text-center">
                <button id="{{$contact->id}}" data-token="{{ csrf_token() }}"
                        data-route="{{route('contacts.destroy',$contact->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@elseif($data == 'partners')
    @foreach($partners as $partner)
        <tr id="removable{{$partner->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$partner->link}}</td>
            <td class="text-center">
                <img src="{{asset($partner->photo->path)}}"
                     alt="" style="height: 50px;">
            </td>

            <td class="text-center"><a href="{{route('partners.edit', $partner->id)}}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
            </td>
            <td class="text-center">
                <button data-token="{{ csrf_token() }}"
                        data-route="{{URL::route('partners.destroy',$partner->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@elseif($data == 'team')
    @foreach($comp_team as $comp_per)
        <tr id="removable{{$comp_per->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$comp_per->$name}}</td>
            <td class="text-center">{{$comp_per->$job}}</td>
            @if($comp_per->fb_url == null)
                <td class="text-center">{{trans('admin.no_data')}}</td>
            @else
                <td class="text-center">{{$comp_per->fb_url}}</td>
            @endif
            @if($comp_per->tw_url == null)
                <td class="text-center">{{trans('admin.no_data')}}</td>
            @else
                <td class="text-center">{{$comp_per->tw_url}}</td>
            @endif
            @if($comp_per->insta_url == null)
                <td class="text-center">{{trans('admin.no_data')}}</td>
            @else
                <td class="text-center">{{$comp_per->insta_url}}</td>
            @endif
            <td class="text-center">
                <img src="{{asset($comp_per->photo->path)}}"
                     alt="" style="height: 50px;">
            </td>

            <td class="text-center"><a href="{{route('company-team.edit', $comp_per->id)}}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
            </td>
            <td class="text-center">
                <button data-token="{{ csrf_token() }}"
                        data-route="{{URL::route('company-team.destroy',$comp_per->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@elseif($data == 'posts')
    @foreach($posts as $post)
        <tr id="removable{{$post->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$post->$title}}</td>
            <td class="text-center">{!!$post->$desc!!}</td>
            <td class="text-center">
                @foreach($post->services as $service)
                    {{$loop->last ? $service->$title : $service->$title . ' - '}}
                @endforeach
            </td>
            <td class="text-center">
                <img src="{{asset($post->photo->path)}}"
                     alt="" style="height: 50px;">
            </td>

            <td class="text-center"><a href="{{route('posts.edit', $post->id)}}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
            </td>
            <td class="text-center">
                <button data-token="{{ csrf_token() }}"
                        data-route="{{URL::route('posts.destroy',$post->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@elseif($data == 'subscribers')
    @foreach($subscribers as $subscriber)
        <tr id="removable{{$subscriber->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$subscriber->email}}</td>
            <td class="text-center">
                <button id="{{$subscriber->id}}" data-token="{{ csrf_token() }}"
                        data-route="{{route('subscribers.destroy',$subscriber->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@elseif($data == 'services')
    @foreach($services as $service)
        <tr id="removable{{$service->id}}">
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{$service->$title}}</td>
            <td class="text-center">{!!$service->$desc!!}</td>
            <td class="text-center">
                <img src="{{asset($service->photo->path)}}"
                     alt="" style="height: 50px;">
            </td>
            <td class="text-center">
                <img src="{{asset($service->photo->icon)}}"
                     alt="" style="height: 50px;">
            </td>

            <td class="text-center"><a href="{{route('services.edit', $service->id)}}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
            </td>
            <td class="text-center">
                <button data-token="{{ csrf_token() }}"
                        data-route="{{URL::route('services.destroy',$service->id)}}"
                        type="button" class="destroy btn btn-danger btn-xs"><i
                        class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@endif

